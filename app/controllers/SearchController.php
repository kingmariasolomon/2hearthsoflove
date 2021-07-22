<?php
namespace App\Controllers;
use Core\Controller;
use Core\H;
use Core\Session;
use Core\Router;
use App\Models\Search;

class SearchController extends Controller 
{
    public function __construct($controller, $action){
        parent::__construct($controller, $action);
        $this->view->setLayout('template1');
        $this->load_model('Blogs');
    }
    
    public function indexAction(){
        Router::redirect('blog/page/1');
        // $this->view->render('blog/index');
    }




    public function testAjaxAction(){
        $resp = ['success'=>true, 'data'=>['id'=>23, 'name'=>'solomon', 'favorite_food'=>'beans']];
        $this->jsonResponse($resp);
    }
}
