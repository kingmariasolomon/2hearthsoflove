<?php
namespace App\Models;
use Core\Model;
use Core\Validators\RequiredValidator ;
use Core\Validators\MaxValidator ;

class Calendar extends Model
{
    public $id, $title, $start, $end, $backgroundColor, $borderColor, $allDay = false, $url, $date;

    public function __construct() {
        $table = 'calendar';
        parent::__construct($table);
    }

    public function validator(){
        $this->runValidation(new RequiredValidator($this, ['field'=>'title', 'msg'=>'Title is required.']));
    }

    public function findAll($params=[]) {
        return $this->find($params);
    }

}
