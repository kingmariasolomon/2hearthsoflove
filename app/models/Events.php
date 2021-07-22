<?php
namespace App\Models;
use Core\Model;
use Core\Validators\RequiredValidator ;
use Core\Validators\MaxValidator ;

class Events extends Model
{
    public $id, $title, $venue, $description, $pix="assets/logo/deafult_baner_image.jpg", $video, $type, $event_date, $event_time, $date;

    public function __construct() {
        $table = 'event_news';
        parent::__construct($table);
    }

    public function validator(){
        $this->runValidation(new RequiredValidator($this, ['field'=>'title', 'msg'=>'Event Title is required.']));
        $this->runValidation(new RequiredValidator($this, ['field'=>'venue', 'msg'=>'Event Venue is required.']));
        $this->runValidation(new RequiredValidator($this, ['field'=>'description', 'msg'=>'Event description is required.']));
        $this->runValidation(new RequiredValidator($this, ['field'=>'type', 'msg'=>'Event type is required.']));
        $this->runValidation(new RequiredValidator($this, ['field'=>'event_date', 'msg'=>'Event date is required.']));
        $this->runValidation(new RequiredValidator($this, ['field'=>'event_time', 'msg'=>'Event time is required.']));
    }
    public function findAll($params=[]) {
        return $this->find($params);
    }

    public function findEventById($id) {
        return $this->findById($id);
    }
}
