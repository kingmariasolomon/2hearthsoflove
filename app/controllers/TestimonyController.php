<?php
namespace App\Controllers;
use Core\Controller;
use Core\H;
use Core\Session;
use Core\Router;
use App\Models\Testimonies;

class TestimonyController extends Controller 
{
    public function __construct($controller, $action){
        parent::__construct($controller, $action);
        $this->view->setLayout('template1');
        $this->load_model('Testimonies');
    }

    public function indexAction(){
            Router::redirect('testimony/page/1');
        // $this->view->render('testimony/index');
    }

    public function pageAction($current_page){
        $limit = 1; //THIS MUST ALSO BE SET TO BE THE SAME IN TESTIMONIES INDEX PAGE IN $paging->set('perpage',1);
                    // SETTING THIS FROM THE  URL WILL CAUSE SECURITY ISSUES
        $start = ($current_page - 1) * $limit;
        $test = $this->TestimoniesModel->findAll(['order'=>'id DESC', "limit"=>$start. ', '.$limit]);
        $count = $this->TestimoniesModel->findAll(['order'=>'id DESC']);
        $this->view->total = (is_array($count))? count($count): null;
        $this->view->testimonies = $test;
        $this->view->render('testimony/index');
    }

    public function detailAction($id=null){
        if(!empty($id)){
            $test = $this->TestimoniesModel->findById((int)$id, ['order'=>'id DESC']);
            $this->view->testimonies = $test;
            $this->view->render('testimony/detail');
        }else {
            Router::redirect('testimony');
        }
    }

    public function shareAction(){
        $share = new Testimonies();
        if($this->request->isPost()) {H::dnc($this->request->get());
            $this->request->csrfCheck();
            $share->assign($this->request->get());
            if($share->save()){
                Session::addMsg('success', 'Your Testimony Has Been Added Successfully!');
                Router::redirect('testimony');
            }
        }
        $this->view->share = $share;
        $this->view->displayErrors = $share->getErrorMessages();
        $this->view->postAction = PROOT . 'testimony' . DS . 'share';
        $this->view->render('testimony/share');
    }


// TESTIMONIES REGION
    public function testimoniesAction(){
        $test = $this->TestimoniesModel->findAll(['order'=>'id DESC']);
        $this->view->testimonies = $test;
        $this->view->setLayout('dashboard2');
        $this->view->render('admin/testimonies/index');
    }

    public function testimonyDetailsAction($id){
        $test = $this->TestimoniesModel->findById((int)$id);
        $this->view->testimonies = $test;
        $this->view->setLayout('dashboard2');
        $this->view->render('admin/testimonies/details');
    }

    public function approveTestimonyAction($id){
        $test = $this->TestimoniesModel->findById((int)$id);
        if(!$test){
            $resp = ['failed'=>true, 'data'=>['msg'=>' data could not be found',]];
            $this->jsonResponse($resp);
        }
        if($this->request->isPost()) {
            $test->assign($this->request->get());
            if($test->save()){
                $resp_txt = ($this->request->get()['approved'] == 1)? "Approved!" : "Disapproved!";
                $resp = ['success'=>true, 'data'=>['msg'=>$resp_txt,]];
                $this->jsonResponse($resp);
            }
        }
    }

    public function deletetestimonyAction($id){
        $test = $this->TestimoniesModel->findById((int)$id);
        if($test){
            if($test->delete()){
                Session::addMsg('success', 'Testimony Has Been Delete Successfully!');
                Router::redirect('testimony/testimonies');
            }
        }
    }
// END OF TESTIMONIES REGION

}
