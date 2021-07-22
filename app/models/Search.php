<?php
namespace App\Models;
use Core\Model;
use Core\Validators\RequiredValidator ;
use Core\Validators\MaxValidator ;

class Search extends Model
{
    public $id, $user_id, $cat_id, $title, $body, $approved=0, $pix, $date, $no_of_views, $deleted = 0;

    public function __construct() {
        $table = 'blogs';
        parent::__construct($table);
        $this->_softDelete = true;
    }

    public function validator(){
        $this->runValidation(new RequiredValidator($this, ['field'=>'cat_id', 'msg'=>'Category is required.']));
        $this->runValidation(new RequiredValidator($this, ['field'=>'pix', 'msg'=>'Picture is required.']));
        $this->runValidation(new RequiredValidator($this, ['field'=>'title', 'msg'=>'Title is required.']));
        $this->runValidation(new RequiredValidator($this, ['field'=>'body', 'msg'=>'Blog is required.']));
    }

    public function findAll($params=[]) {
        return $this->find($params);
    }

    public function findByIdAndUserId($blog_id, $user_id, $params=[]) {
        $conditions = [
            'conditions' =>'id = ? And user_id = ?',
            'bind' => [$blog_id, $user_id]
        ];
        $conditions = array_merge($conditions, $params);
        return $this->findFirst($conditions);
    }
}
