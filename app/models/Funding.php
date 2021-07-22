<?php
namespace App\Models;
use Core\Model;
use Core\Validators\RequiredValidator ;
use Core\Validators\MaxValidator ;

class Funding extends Model
{
    public $id, $title, $account_no, $parent = 0;

    public function __construct() {
        $table = 'fund_categories';
        parent::__construct($table);
    }

    public function validator(){
        $this->runValidation(new RequiredValidator($this, ['field'=>'title', 'msg'=>'Title is required.']));
        $this->runValidation(new RequiredValidator($this, ['field'=>'account_no', 'msg'=>'Account Number is required.']));
    }

    public function findAll($params=[]) {
        return $this->find($params);
    }

    public function findAllParent($parent_no, $params=[]) {
        $conditions = [
            'conditions' => 'parent = ?',
            'bind' => [$parent_no]
        ];
        $conditions = array_merge($conditions, $params);
        return $this->find($conditions);
    }
}
