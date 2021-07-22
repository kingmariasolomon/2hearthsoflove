<?php
namespace App\Controllers;
use Core\Controller;

class RestrictedController extends Controller
{
    public function __construct($controller, $action){
        parent::__construct($controller, $action);
        $this->view->setLayout('template1');
    }

    public function indexAction(){
        $this->view->render('restricted/index');
    }

    public function badTokenAction(){
        $this->view->render('restricted/badToken');
    }
}