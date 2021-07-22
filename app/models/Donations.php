<?php
namespace App\Models;
use Core\Model;
use Core\Validators\RequiredValidator ;
use Core\Validators\MaxValidator ;

class Donations extends Model
{
    public $id, $email, $giving_to, $amount, $note, $status=0, $date, $deleted = 0;

    public function __construct() {
        $table = 'donations';
        parent::__construct($table);
        $this->_softDelete = true;
    }

    public function validator(){
        $this->runValidation(new RequiredValidator($this, ['field'=>'email', 'msg'=>'Email is required.']));
        $this->runValidation(new RequiredValidator($this, ['field'=>'giving_to', 'msg'=>'Whom You Are Giving To is required.']));
        $this->runValidation(new RequiredValidator($this, ['field'=>'amount', 'msg'=>'Amount is required.']));
    }

    public function findAll($params=[]) {
        return $this->find($params);
    }
}
