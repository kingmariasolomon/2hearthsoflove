<?php
namespace App\Models;
use Core\Model;
use Core\Validators\RequiredValidator ;
use Core\Validators\MaxValidator ;
use Core\Validators\MinValidator ;

class Testimonies extends Model
{
    private $_softdelete;
    public $id, $fname, $lname, $email, $phone, $title, $testimony, $regular_member, $include_in_website, $include_name, $date, $approved=0, $deleted = 0;

    public function __construct() {
        $table = 'testimonies';
        parent::__construct($table);
        $this->_softdelete = true;
    }

    public function validator(){
        $this->runValidation(new RequiredValidator($this, ['field'=>'fname', 'msg'=>'First Name is required.']));
        $this->runValidation(new RequiredValidator($this, ['field'=>'lname', 'msg'=>'Last Name is required.']));
        $this->runValidation(new RequiredValidator($this, ['field'=>'email', 'msg'=>'Email is required.']));
        $this->runValidation(new RequiredValidator($this, ['field'=>'phone', 'msg'=>'Phone is required.']));
        $this->runValidation(new RequiredValidator($this, ['field'=>'testimony', 'msg'=>'Testimony is required.']));
        $this->runValidation(new RequiredValidator($this, ['field'=>'title', 'msg'=>'Title Of Your Testimony is required.']));
        if(!property_exists($this, 'id') && $this->id == ''){
            $this->runValidation(new MinValidator($this, ['field'=>'testimony', 'rule'=>150, 'msg'=>'Testimony Must Be at least 150 Characters.']));
            $this->runValidation(new MaxValidator($this, ['field'=>'testimony', 'rule'=>1000, 'msg'=>'Testimony Must Not Exceed 1000 Characters.']));

            $this->runValidation(new MaxValidator($this, ['field'=>'title', 'rule'=>100, 'msg'=>'Title of Your Testimony Must Not Exceed 100 Characters.']));
        }
        $this->runValidation(new RequiredValidator($this, ['field'=>'regular_member', 'msg'=>'Specify If You Are A Regular Member!']));
        $this->runValidation(new RequiredValidator($this, ['field'=>'include_in_website', 'msg'=>'Specify If Your Testimony Should Be Included On Our Website!']));
        $this->runValidation(new RequiredValidator($this, ['field'=>'include_name', 'msg'=>'Specify If Your Name Should Be Included With Your Testimony On Our Website!']));
    }

    public function tableCount() {
        return $this->tableQuatity();
    }

    public function findAll($params=[]) {
        return $this->find($params);
    }

    public function displayName() {
        return $this->fname . ' ' . $this->lname;
    }

}
