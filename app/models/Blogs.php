<?php
namespace App\Models;
use Core\Model;
use Core\Validators\RequiredValidator ;
use Core\Validators\MaxValidator ;

class Blogs extends Model
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

    public function findAllByUserId($user_id, $params=[]) {
        $conditions = [
            'conditions' => 'user_id = ?',
            'bind' => [$user_id]
        ];
        $conditions = array_merge($conditions, $params);
        return $this->find($conditions);
    }

    public function findAllApproved($approved, $params=[]) {
        $conditions = [
            'conditions' => "approved = ?",
            'bind' => [$approved]
            ];    
        $conditions = array_merge($conditions, $params);
        return $this->find($conditions);
    }

    public function findByCategoryApproved($approved, $cat_id, $params=[]) {
        $conditions = [
            'conditions' => "approved = ? AND cat_id = ?",
            'bind' => [$approved, $cat_id]
            ];    
        $conditions = array_merge($conditions, $params);
        return $this->find($conditions);
    }

    public function searchApproved($approved, $keyword="", $params=[]) {
        @$main_keyword = "%{$keyword}%";
        $conditions = [
            'conditions' => "approved = ? And title LIKE ?",
            'bind' => [$approved, "{$main_keyword}"]
        ];

        $conditions = array_merge($conditions, $params);
        return $this->find($conditions);
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
