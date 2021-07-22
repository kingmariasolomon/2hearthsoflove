<?php
namespace App\Controllers;
use Core\Controller;
use Core\H;
use Core\Session;
use Core\Router;
use App\Models\Donations;
use App\Models\Funding;

class FundingController extends Controller 
{
    public function __construct($controller, $action){
        parent::__construct($controller, $action);
        $this->view->setLayout('template1');
        $this->load_model('Funding');
    }

    public function indexAction(){
        // $this->view->render('about/index');
    }

    public function donationAction(){
        $this->view->render('funding/donation');
    }


    
// FUNDING CATEGORY REGION
    public function fundCatAction(){
        $fundcat = $this->FundingModel->findAll(['order'=>'id DESC']);
        $this->view->fundcat = $fundcat;
        $this->view->setLayout('dashboard2');
        $this->view->render('admin/fundcategory/index');
    }

    public function addFundCatAction() {
        $parent = $this->FundingModel->findAllParent(0);
        $prt_array=[];
        foreach ($parent as $value) {
            $prt_array[$value->id] = $value->title;
        }

        $fundcat = new Funding();
        if($this->request->isPost()) {
            $this->request->csrfCheck();
            $fundcat->assign($this->request->get());
            if($fundcat->save()){
                Session::addMsg('success', 'New fund category Has Been Added Successfully!');
                Router::redirect('funding/fundCat');
            }
        }

        $this->view->displayErrors = $fundcat->getErrorMessages();
        $this->view->postAction = PROOT . 'funding' . DS . 'addFundCat';
        $this->view->fundcat = $fundcat;
        $this->view->parent = $prt_array;
        $this->view->setLayout('dashboard2');
        $this->view->render('admin/fundcategory/add');
    }

    public function editFundCatAction($id) {
        $fundcat = $this->FundingModel->findById((int)$id);
        $parent = $this->FundingModel->findAllParent(0);
        $prt_array=[];
        foreach ($parent as $value) {
            $prt_array[$value->id] = $value->title;
        }
        if(!$fundcat) Router::redirect('funding/fundCat');
        if($this->request->isPost()) {
            $this->request->csrfCheck();
            $fundcat->assign($this->request->get());
            if($fundcat->save()){
                Session::addMsg('success', 'Fund Category Has Been Edited Successfully!');
                Router::redirect('funding/fundCat');
            }
        }
        $this->view->displayErrors = $fundcat->getErrorMessages();
        $this->view->postAction  = PROOT . 'funding' . DS . 'editFundCat' . DS . $fundcat->id;
        $this->view->fundcat = $fundcat;
        $this->view->parent = $prt_array;
        $this->view->setLayout('dashboard2');
        $this->view->render('admin/fundcategory/edit');
    }

    public function deleteFundCatAction($id){
        $fundcat = $this->FundingModel->findById((int)$id);
        if($fundcat){
            if($fundcat->delete()){
                Session::addMsg('success', 'Fund Category Has Been Delete Successfully!');
                Router::redirect('funding/fundCat');
            }
        }
    }

    public function deletemultipleFundCatAction($form_field, $ids=[]){
        $ids = json_decode($_REQUEST[$form_field], true);
        foreach ($ids as $value) {
            $fundcat = $this->FundingModel->findById((int)$value);
            if($fundcat){
                $fundcat->delete();
            }
        }
        $resp = ['success'=>true, 'data'=>['msg'=>'All Deleted Successfully',]];
        $this->jsonResponse($resp);
    }
// END OF FUNDING CATEGORY REGION


// DONATION REGION
    public function donationsAction(){
        $this->load_model('Donations');
        $donation = $this->DonationsModel->findAll(['order'=>'id DESC']);
        $this->view->donation = $donation;
        $this->view->setLayout('dashboard2');
        $this->view->render('admin/donation/index');
    }

    public function donationDetailsAction($id){
        $this->load_model('Donations');
        $donation = $this->DonationsModel->findById((int)$id);
        $this->view->donation = $donation;
        $this->view->setLayout('dashboard2');
        $this->view->render('admin/donation/details');
    }

    public function deleteDonationAction($id){
        $this->load_model('Donations');
        $donation = $this->DonationsModel->findById((int)$id);
        if($donation){
            if($donation->delete()){
                Session::addMsg('success', 'Donation Has Been Delete Successfully!');
                Router::redirect('funding/donation');
            }
        }
    }
// END OF DONATION REGION



    public function testAjaxAction(){
        $resp = ['success'=>true, 'data'=>['id'=>23, 'name'=>'solomon', 'favorite_food'=>'beans']];
        $this->jsonResponse($resp);
    }
}
