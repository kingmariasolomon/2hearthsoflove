<?php
namespace App\Models;
use Core\Model;
use Core\Validators\RequiredValidator ;
use Core\Validators\MaxValidator ;

class Comments extends Model
{
    public $id, $user_id, $blog_id, $comment, $pix="uploads/person/avatar.png", $type='main', $date;

    public function __construct() {
        $table = 'comments';
        parent::__construct($table);
        $this->_softDelete = false;
    }

    public function validator(){
        $this->runValidation(new RequiredValidator($this, ['field'=>'blog_id', 'msg'=>'Specify the blog is required.']));
        $this->runValidation(new RequiredValidator($this, ['field'=>'user_id', 'msg'=>'Unidentified User.']));
        $this->runValidation(new RequiredValidator($this, ['field'=>'comment', 'msg'=>'Blog is required.']));
    }

    public function findAll($params=[]) {
        return $this->find($params);
    }

    public function findAllBlogId($blog_id, $params=[]) {
        $conditions = [
            'conditions' => 'blog_id = ?',
            'bind' => [$blog_id]
        ];
        $conditions = array_merge($conditions, $params);
        return $this->find($conditions);
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
            'conditions' => 'approved = ?',
            'bind' => [$approved]
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
