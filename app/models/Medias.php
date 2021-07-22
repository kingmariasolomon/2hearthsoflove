<?php
namespace App\Models;
use Core\Model;
use Core\Validators\RequiredValidator ;
use Core\Validators\MaxValidator ;

class Medias extends Model
{
    private $_softdelete;
    public $id, $cat_id, $sub_cat_id, $title, $description, $media, $media_date, $date, $deleted = 0;

    public function __construct() {
        $table = 'medias';
        parent::__construct($table);
        $this->_softdelete = true;
    }

    public function validator(){
        $this->runValidation(new RequiredValidator($this, ['field'=>'cat_id', 'msg'=>'Media Category is required.']));
        $this->runValidation(new RequiredValidator($this, ['field'=>'sub_cat_id', 'msg'=>'Media Sub Category is required.']));
        $this->runValidation(new RequiredValidator($this, ['field'=>'title', 'msg'=>'Media Title is required.']));
        // $this->runValidation(new RequiredValidator($this, ['field'=>'description', 'msg'=>'Media description is required.']));
        $this->runValidation(new RequiredValidator($this, ['field'=>'media', 'msg'=>'Media is required.']));
        $this->runValidation(new RequiredValidator($this, ['field'=>'media_date', 'msg'=>'Media date is required.']));
    }
    public function findAll($params=[]) {
        return $this->find($params);
    }

    public function findMediaById($id) {
        return $this->findById($id);
    }
    public function findByCategory($cat_id, $params=[]) {
        $conditions = [
            'conditions' => 'cat_id = ?',
            'bind' => [$cat_id]
        ];
        $conditions = array_merge($conditions, $params);
        return $this->find($conditions);
    }
}
