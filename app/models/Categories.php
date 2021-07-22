<?php
namespace App\Models;
use Core\Model;
use Core\H;
use Core\Validators\RequiredValidator ;
use Core\Validators\MaxValidator ;

class Categories extends Model
{
    public $id, $title, $status=1, $type, $date;

    public function __construct() {
        $table = 'categories';
        parent::__construct($table);
    }

    public function validator(){
        $this->runValidation(new RequiredValidator($this, ['field'=>'title', 'msg'=>'Category Title is required.']));
        $this->runValidation(new MaxValidator($this, ['field'=>'title', 'rule'=>150, 'msg'=>'Category Title Must Be less than 150 Characters.']));
    }

    public function findAll($params=[]) {
        return $this->find($params);
    }

    public function findTypeCategory($type, $params=[]) {
        $conditions = [
            'conditions' => 'type = ?',
            'bind' => [$type]
        ];
        $conditions = array_merge($conditions, $params);
        return $this->find($conditions);
    }
    public function findIdAndTypeCategory($cid, $type, $params=[]) {
        $conditions = [
            'conditions' =>'id = ? And type = ?',
            'bind' => [$cid, $type]
        ];
        $conditions = array_merge($conditions, $params);
        return $this->findFirst($conditions);
    }
}
