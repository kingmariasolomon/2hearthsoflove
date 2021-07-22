<?php
namespace App\Controllers;
use Core\Controller;
use Core\H;
use Core\Session;
use Core\Router;
use App\Models\Prayerrequests;

class PrayerrequestController extends Controller 
{
    public function __construct($controller, $action){
        parent::__construct($controller, $action);
        $this->view->setLayout('template1');
        $this->load_model('Prayerrequests');
    }

    public function indexAction(){
        $this->view->render('prayerrequest/index');
    }

    
// PRAYER REQUEST REGION
    public function prayerRequestsAction(){
        $reqests = $this->PrayerrequestsModel->findAll(['order'=>'id DESC']);
        $this->view->reqests = $reqests;
        $this->view->setLayout('dashboard2');
        $this->view->render('admin/prayerrequests/index');
    }

    public function reqestDetailsAction($id){
        $reqests = $this->PrayerrequestsModel->findById((int)$id);
        $this->view->reqests = $reqests;
        $this->view->setLayout('dashboard2');
        $this->view->render('admin/prayerrequests/details');
    }

    public function acknowledgReqestAction($id){
        $reqests = $this->PrayerrequestsModel->findById((int)$id);
        if(!$reqests){
            $resp = ['failed'=>true, 'data'=>['msg'=>' data could not be found',]];
            $this->jsonResponse($resp);
        }
        if($this->request->isPost()) {
            $reqests->assign($this->request->get());
            if($reqests->save()){
                $resp_txt = ($this->request->get()['acknowledge'] == 1)? "Acknowledge!" : "Disapproved!";
                $resp = ['success'=>true, 'data'=>['msg'=>$resp_txt,]];
                $this->jsonResponse($resp);
            }
        }
    }

    public function deleteReqestAction($id){
        $reqests = $this->PrayerrequestsModel->findById((int)$id);
        if($reqests){
            if($reqests->delete()){
                Session::addMsg('success', 'Prayer Request Has Been Delete Successfully!');
                Router::redirect('prayerrequest/prayerrequests');
            }
        }
    }
// END OF PRAYER REQUEST REGION

    public function testAjaxAction(){
        $resp = ['success'=>true, 'data'=>['id'=>23, 'name'=>'solomon', 'favorite_food'=>'beans']];
        $this->jsonResponse($resp);
    }
}
