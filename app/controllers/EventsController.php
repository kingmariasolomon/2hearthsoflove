<?php
namespace App\Controllers;
use Core\Controller;
use Core\H;
use Core\Session;
use Core\Router;
use App\Models\Calendar;
use App\Models\Events;

class EventsController extends Controller 
{
    public function __construct($controller, $action){
        parent::__construct($controller, $action);
        $this->view->setLayout('template1');
        $this->load_model('Events');
    }

    public function indexAction(){
        $event = $this->EventsModel->findAll(['order'=>'date DESC']);
        $this->view->events = $event;
        $this->view->render('events/index');
    }

    public function calendarAction(){
        $this->view->render('events/calendar');
    }
    
// CALENDAR REGION
    public function calendarViewAction(){
        $this->load_model('Calendar');
        $this->view->setLayout('dashboard2');
        $this->view->render('admin/events/calendar');
    }

    public function getEventsAction(){
        $this->load_model('Calendar');
        $calendar = $this->CalendarModel->findAll();//H::dnd($calendar);
        foreach ($calendar as $v) {
            $data[] = array(
                'id' => $v->id,
                'title' => $v->title,
                'start' => $v->start,
                'end' => $v->end,
                'backgroundColor' => $v->backgroundColor,
                'borderColor' => $v->borderColor,
            );
        }
        echo json_encode($data);
    }

    public function createEventAction(){
        $this->load_model('Calendar');
        $calendar = new Calendar();
        if($this->request->isPost()) {
            $calendar->assign($this->request->get());
            if($calendar->save()){
                $resp = ['success'=>true, 'data'=>['id'=>23, 'name'=>'solomon', 'favorite_food'=>'beans']];
                $this->jsonResponse($resp);
            }
        }
    }

    public function updateEventAction($id){
        $this->load_model('Calendar');
        $calendar = $this->CalendarModel->findById((int)$id);
        if($this->request->isPost()) {
            $calendar->assign($this->request->get());
            if($calendar->save()){
                $resp = ['success'=>true, 'data'=>['id'=>23, 'name'=>'solomon', 'favorite_food'=>'beans']];
                $this->jsonResponse($resp);
            }
        }
    }

    public function deleteEventAction($id){
        $this->load_model('Calendar');
        $calendar = $this->CalendarModel->findById((int)$id);
        if($calendar){
            if($calendar->delete()){
                $resp = ['success'=>true, 'data'=>['id'=>23, 'name'=>'solomon', 'favorite_food'=>'beans']];
                $this->jsonResponse($resp);
            }
        }
    }
// END OF CALENDAR REGION

// EVENT REGION
    public function eventsAction(){
        $event = $this->EventsModel->findAll(['order'=>'date DESC']);
        $this->view->events = $event;
        $this->view->setLayout('dashboard2');
        $this->view->render('admin/events/index');
    }

    public function getAllEventsAction(){
        $Event = $this->EventsModel->findAll();//H::dnd($Event);
        foreach ($Event as $v) {
            $data[] = array(
                'id' => $v->id,
                'title' => $v->title,
                'start' => $v->start,
                'end' => $v->end,
                'backgroundColor' => $v->backgroundColor,
                'borderColor' => $v->borderColor,
            );
        }
        echo json_encode($data);
    }

    public function addEventAction(){
        $event = $this->EventsModel->findAll();
        
        $event = new Events();
        if($this->request->isPost()) {
            $form_value = $this->request->get();
            if(!empty($_FILES["pix"]["tmp_name"])){
                $file_name = $event->savefile($event, 'pix', 'events');
                $form_value['pix'] = $file_name;
            }
            $event->assign($form_value);
            if($event->save()){
                Session::addMsg('success', 'New Event Programe Has Been Added Successfully!');
                Router::redirect('events/events');
            }
        }

        $this->view->events = $event;
        $this->view->displayErrors = $event->getErrorMessages();
        $this->view->postAction = PROOT . 'events' . DS . 'addEvent';
        $this->view->setLayout('dashboard2');
        $this->view->render('admin/events/add');
    }

    public function editEventAction($id){
        $event = $this->EventsModel->findEventById((int)$id);
        if($this->request->isPost()) {
            $form_value = $this->request->get();
            if(!empty($_FILES["pix"]["tmp_name"])){
                $file_name = $event->savefile($event, 'pix', 'events');
                $form_value['pix'] = $file_name;
            }
            $event->assign($form_value);
            if($event->save()){
                Session::addMsg('success', 'Event Information Has Been Updated Successfully!');
                Router::redirect('events/events');
            }
        }
        $this->view->displayErrors = $event->getErrorMessages();
        $this->view->postAction = PROOT . 'events' . DS . 'editEvent' .DS . $event->id;
        $this->view->events = $event;
        $this->view->setLayout('dashboard2');
        $this->view->render('admin/events/edit');
    }

    public function deleteAnEventAction($id){
        $event = $this->EventsModel->findById((int)$id);
        if($event){
            if($event->delete()){
                Session::addMsg('success', 'Event Has Been Delete Successfully!');
                Router::redirect('events/events');
            }
        }
    }

    public function deletemultipleEventsAction($form_field, $ids=[]){
        $ids = json_decode($_REQUEST[$form_field], true);
        foreach ($ids as $value) {
            $Event = $this->EventsModel->findById((int)$value);
            if($Event){
                $Event->delete();
            }
        }
        $resp = ['success'=>true, 'data'=>['msg'=>' Deleted Successfully',]];
        $this->jsonResponse($resp);
    }
// END OF EVENT REGION

}
