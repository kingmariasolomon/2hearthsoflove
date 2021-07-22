<?php
namespace App\Controllers;
use Core\Controller;
use Core\H;
use App\Models\Users;

class NewsController extends Controller 
{
    public function __construct($controller, $action){
        parent::__construct($controller, $action);
        $this->view->setLayout('template1');
    }

    public function indexAction(){
        $this->view->render('news/index');
    }

    public function testAjaxAction(){
        $resp = ['success'=>true, 'data'=>['id'=>23, 'name'=>'solomon', 'favorite_food'=>'beans']];
        $this->jsonResponse($resp);
    }
}
