<?php
namespace App\Models;
use Core\Model;
use Core\H;
use Core\Validators\RequiredValidator ;
use Core\Validators\MaxValidator ;
use Core\Validators\MinValidator ;

class Prayerrequests extends Model
{
    public $id, $fname, $lname, $email, $phone, $address, $city, $state, $country, $prayerrequest, $acknowledge, $date;

    public function __construct() {
        $table = 'prayerrequests';
        parent::__construct($table);
    }

    public function validator(){
        $this->runValidation(new RequiredValidator($this, ['field'=>'fname', 'msg'=>'First Name is required.']));
        $this->runValidation(new RequiredValidator($this, ['field'=>'lname', 'msg'=>'Last Name is required.']));
        $this->runValidation(new RequiredValidator($this, ['field'=>'email', 'msg'=>'Email is required.']));
        $this->runValidation(new RequiredValidator($this, ['field'=>'phone', 'msg'=>'Phone is required.']));
        $this->runValidation(new RequiredValidator($this, ['field'=>'prayerrequest', 'msg'=>'Your Prayer Request is required.']));
        if(!property_exists($this, 'id') && $this->id == ''){
            $this->runValidation(new MinValidator($this, ['field'=>'prayerrequest', 'rule'=>150, 'msg'=>'Your Prayer Request Must Be at least 150 Characters.']));
        }
        $this->runValidation(new RequiredValidator($this, ['field'=>'state', 'msg'=>'Your State is required.']));
        $this->runValidation(new RequiredValidator($this, ['field'=>'city', 'msg'=>'Your City is required.']));
        $this->runValidation(new RequiredValidator($this, ['field'=>'country', 'msg'=>'Your Country is required.']));
    }

    public function findAll($params=[]) {
        return $this->find($params);
    }

}
