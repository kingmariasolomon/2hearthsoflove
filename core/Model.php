<?php
namespace Core;

class Model  
{
    protected $_db, $_table, $_modelName, $_softDelete = false, $_validates=true, $_validationErrors=[];
    public $id;

    public function __construct($table) {
        $this->_db = DB::getInstance();
        $this->_table = $table;
        $this->_modelName = str_replace(' ', '', ucwords(str_replace('_', ' ', $this->_table))); // *** $table = 'user_session' => user session => User Session => UserSession ***//
    }

    public function get_columns(){
        return $this->_db->get_columns($this->_table);
    }

    protected function _softDeleteParams($params) {
        if($this->_softDelete) {
            if(array_key_exists('conditions', $params)) {
                if(is_array($params['conditions'])) {
                    $params['conditions'][] = "deleted != 1";
                }else{
                    $params['conditions'] .= " AND deleted != 1";
                }
            }else {
                $params['conditions'] = "deleted != 1";
            }
        }
        return $params;
    }

    public function find($params = []) {
        $params = $this->_softDeleteParams($params);
        $resultsQuery = $this->_db->find($this->_table, $params, get_class($this));
        if(!$resultsQuery) return [];
        return $resultsQuery;
    }

    public function findFirst($params = []) {
        $params = $this->_softDeleteParams($params);
        $resultQuery = $this->_db->findFirst($this->_table, $params, get_class($this));
        return $resultQuery;
    }

    public function findById($id){
        return $this->findFirst(['conditions'=>"id = ?", 'bind' => [$id]]);
    }

    public function insert($fields) {
        if(empty($fields)) return false;
        return $this->_db->insert($this->_table, $fields);
    }

    public function save(){
        $this->validator();
        
        if($this->_validates){
            $this->beforeSave();
            $fields = H::getObjectProperties($this);
            // determine whether to update or insert
            if(property_exists($this, 'id') && $this->id != ''){
                $save =  $this->update($this->id, $fields);
                $this->afterSave();
                return $save;
            }else{
                $save =  $this->insert($fields);
                $this->afterSave();
                return $save;
            }
        }
        return false;
    }

    public function savefile($model, $inputField, $subfolder,$count=''){
        $target_dir = "uploads/".$subfolder."/";
        // $new_name = $this->id.'_'.md5(time()).'.'.explode('.',basename($_FILES["$inputField"]["name"]))[1];die($new_name);
        $name = ($count !== '')? $_FILES["$inputField"]["name"][$count] : $_FILES["$inputField"]["name"];
        $tmp_name = ($count !== '')? $_FILES["$inputField"]["tmp_name"][$count] : $_FILES["$inputField"]["tmp_name"];
        $size = ($count !== '')? $_FILES["$inputField"]["size"][$count] : $_FILES["$inputField"]["size"];

        $target_file = $target_dir . basename($name);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($tmp_name);
            if($check !== false) {
                $uploadOk = 1;
            } else {
                self::addErrorMessage($inputField, "File is not an image.");
                $uploadOk = 0;
            }
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            // self::addErrorMessage($inputField, "Sorry, file already exists.");
            // $uploadOk = 0;
        }
        // Check file size
        if ($size > 500000) {
            self::addErrorMessage($inputField, "Sorry, your file is too large.");
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            self::addErrorMessage($inputField, "Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            self::addErrorMessage($inputField, "Sorry, your file was not uploaded.");
        // if everything is ok, try to upload file
        } else {
            if(!is_dir($target_dir)) {
                mkdir($target_dir);
            }
            if (move_uploaded_file($tmp_name, $target_file)) {
                // echo "The file ". basename( $_FILES["$inputField"]["name"]). " has been uploaded.";
            } else {
                self::addErrorMessage($inputField, "Sorry, there was an error uploading your file.");
            }
        }
        return $target_file;
    }

    public function update($id, $fields){
        if(empty($fields) || $id == '') return false;
        return $this->_db->update($this->_table, $id, $fields);
    }

    public function delete($id = ''){
        if($id == '' && $this->id == '') return false;
        $id = ($id == '')? $this->id : $id;
        if($this->_softDelete){
            return $this->update($id, ['deleted' => 1]);
        }
        return $this->_db->delete($this->_table, $id);
    }

    public function query($sql, $bind=[]){
        return $this->_db->query($sql, $bind);
    }

    public function data(){
        $data = new stdClass();
        foreach (H::getObjectProperties($this) as $column => $value) {
            $data->column = $value;
        }
        return $data;
    }

    public function assign($params){
        if(!empty($params)){
            foreach ($params as $key => $val) {
                if(property_exists($this, $key)) {
                    $this->$key = $val;
                }
            }
            return true;
        }
        return false;
    }

    protected function populateObjData($result){
        foreach ($result as $key => $val) {
            $this->$key = $val;
        }
    }

    public function validator(){}

    public function runValidation($validator){
        $key = $validator->field;
        if(!$validator->success){
            $this->_validates = false;
            $this->_validationErrors[$key] = $validator->msg;
        }
    }

    public function getErrorMessages(){
        return $this->_validationErrors;
    }

    public function validationPassed(){
        return $this->_validates;
    }

    public function addErrorMessage($field, $msg){
        $this->_validates = false;
        $this->_validationErrors[$field] = $msg;
    }

    public function beforeSave(){}
    public function afterSave(){}

    public function isNew(){
        return (property_exists($this, 'id') && !empty($this->id))? false : true;
    }
}
