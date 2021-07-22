<?php

namespace App\Controllers;
use Core\Controller;
use Core\H;
use Core\Session;
use Core\Router;
use App\Models\Users;
use App\Models\Companyinfo;

class AdminController extends Controller 
{
    public function __construct($controller, $action){
        parent::__construct($controller, $action);
        $this->load_model('Companyinfo');
    }

    public function indexAction(){
        $this->view->setLayout('dashboard2');
        $this->view->render('admin/index');
    }

    public function slidersAction($id=1){
        $slider_info = $this->CompanyinfoModel->findCompanyById((int)$id);
        $this->view->displayErrors = $slider_info->getErrorMessages();
        $this->view->sliders = json_decode($slider_info->sliders);
        $this->view->postAction  = PROOT . DS . 'admin' . DS . 'sliders' . DS . $slider_info->id;
        $this->view->setLayout('admindashboard');
        $this->view->render('admin/sliders/sliders');
    }

// USERS REGION
    public function usersAction(){
        $this->load_model('Users');
        $user_info = $this->UsersModel->findAll(['order'=>'id DESC']);//H::dnd($user_info);
        // $this->view->displayErrors = $user_info->getErrorMessages();
        $this->view->users = $user_info;
        $this->view->setLayout('dashboard2');
        $this->view->render('admin/users/index');
    }
    
    public function deleteAction($id) {
        $this->load_model('Users');
        $user = $this->UsersModel->findAllByUserId((int)$id);
        if($user){
            $user->delete();
            Session::addMsg('success', 'User Has Been Deleted!');
        }
        Router::redirect('admin/users');
    }
// END OF USERS REGION

// BRANCHES REGION
    public function branchesAction($id=1){
        $branch_info = $this->CompanyinfoModel->findCompanyById((int)$id);
        $this->view->displayErrors = $branch_info->getErrorMessages();
        $this->view->branches = json_decode($branch_info->branches);
        $this->view->postAction  = PROOT . DS . 'admin' . DS . 'branches' . DS . $branch_info->id;
        $this->view->setLayout('admindashboard');
        $this->view->render('admin/branches/index');
    }

    public function addnewbranchAction($id=0){
        $branch_info = $this->CompanyinfoModel->findCompanyById(1);
        $branch_array = json_decode($branch_info->branches, true);
        if($this->request->isPost()) {
            $branch = (object)$this->request->get();
            $branch_array[$branch->index] = $branch;
            $save_array['branches'] = json_encode($branch_array);
            $this->request->csrfCheck();
            $branch_info->assign($save_array);
            if($branch_info->save()){
                Session::addMsg('success', 'New branch Has Been Added Successfully!');
                Router::redirect('admin/branches');
            }
        }

        $this->view->displayErrors = $branch_info->getErrorMessages();
        $this->view->postAction  = PROOT . 'admin' . DS . 'addnewbranch';
        $this->view->setLayout('admindashboard');
        $this->view->render('admin/branches/addnewbranch');
    }

    public function editbranchesAction($id=1){
        $branch_info = $this->CompanyinfoModel->findCompanyById(1);
        $branch_array = json_decode($branch_info->branches, true);
        if($this->request->isPost()) {
            $branch = (object)$this->request->get();
            $branch_array[$branch->index] = $branch;
            $save_array['branches'] = json_encode($branch_array);
            $this->request->csrfCheck();
            $branch_info->assign($save_array);
            if($branch_info->save()){
                Session::addMsg('success', 'New branch Has Been Added Successfully!');
                Router::redirect('admin/branches');
            }
        }

        $this->view->displayErrors = $branch_info->getErrorMessages();
        $this->view->branches = json_decode($branch_info->branches)->$id;
        $this->view->postAction  = PROOT . DS . 'admin' . DS . 'branches' . DS . $branch_info->id;
        $this->view->setLayout('admindashboard');
        $this->view->render('admin/branches/edit');
    }

    public function deletebranchAction($id=1){
        $branch_info = $this->CompanyinfoModel->findCompanyById(1);
        $branch_array = json_decode($branch_info->branches, true);
        $branch_array = array_diff_key($branch_array, [$id=>'nothing']);

        $save_array['branches'] = json_encode($branch_array);
        $branch_info->assign($save_array);
        if($branch_info->save()){
            Session::addMsg('success', 'New branch Has Been Added Successfully!');
            Router::redirect('admin/branches');
        }
    }

    public function deletemultiplebranchAction($form_field, $ids=[]){
        $branch_info = $this->CompanyinfoModel->findCompanyById(1);
        $branch_array = json_decode($branch_info->branches, true);
        $ids = json_decode($_REQUEST[$form_field], true);
        foreach ($ids as $value) {
            $branch_array = array_diff_key($branch_array, [$value=>'nothing']);
        }
        $save_array['branches'] = json_encode($branch_array);
        $branch_info->assign($save_array);
        if($branch_info->save()){
            $resp = ['success'=>true, 'data'=>['msg'=>' Uploaded Successfully',]];
            $this->jsonResponse($resp);
        }else{
            $resp = ['failure'=>true, 'data'=>['msg'=>' Uploaded Failed',]];
            $this->jsonResponse($resp);
        }
    }
// END OF BRACHES REGION

// PROGRAME REGION
    public function programeAction($id=1){
        $programe_info = $this->CompanyinfoModel->findCompanyById(1);
        $this->view->displayErrors = $programe_info->getErrorMessages();
        $this->view->programes = json_decode($programe_info->programe_days);
        $this->view->postAction  = PROOT . DS . 'admin' . DS . 'branches' . DS . $programe_info->id;
        $this->view->setLayout('admindashboard');
        $this->view->render('admin/programe/index');
    }
    
    public function addnewprogrameAction($id=0){
        $programe_info = $this->CompanyinfoModel->findCompanyById(1);
        $programe_array = json_decode($programe_info->programe_days, true);
        if($this->request->isPost()) {
            $programe = (object)$this->request->get();
            $programe_array[$programe->index] = $programe;
            $save_array['programe_days'] = json_encode($programe_array);
            $this->request->csrfCheck();
            $programe_info->assign($save_array);
            if($programe_info->save()){
                Session::addMsg('success', 'New programe Has Been Added Successfully!');
                Router::redirect('admin/programe');
            }
        }

        $this->view->displayErrors = $programe_info->getErrorMessages();
        $this->view->postAction  = PROOT . 'admin' . DS . 'addnewprograme';
        $this->view->setLayout('admindashboard');
        $this->view->render('admin/programe/addnewprograme');
    }

    public function editprogrameAction($id=1){
        $programe_info = $this->CompanyinfoModel->findCompanyById(1);
        $programe_array = json_decode($programe_info->programe_days, true);
        if($this->request->isPost()) {
            $programe  = (object)$this->request->get();
            $programe_array[$programe->index] = $programe;
            $save_array['programe_days'] = json_encode($programe_array);
            $this->request->csrfCheck();
            $programe_info->assign($save_array);
            if($programe_info->save()){
                Session::addMsg('success', 'New programe Has Been Edited Successfully!');
                Router::redirect('admin/programe');
            }
        }

        $this->view->displayErrors = $programe_info->getErrorMessages();
        $this->view->programes = json_decode($programe_info->programe_days)->$id;
        $this->view->postAction  = PROOT . 'admin' . DS . 'editprograme' . DS . $id;
        $this->view->setLayout('admindashboard');
        $this->view->render('admin/programe/edit');
    }

    public function deleteprogrameAction($id=1){
        $programe_info = $this->CompanyinfoModel->findCompanyById(1);
        $programe_array = json_decode($programe_info->programe_days, true);
        $programe_array = array_diff_key($programe_array, [$id=>'nothing']);

        $save_array['programe_days'] = json_encode($programe_array);
        $programe_info->assign($save_array);
        if($programe_info->save()){
            Session::addMsg('success', 'New programe Has Been Deleted Successfully!');
            Router::redirect('admin/programe');
        }
    }

    public function deletemultipleprogrameAction($form_field, $ids=[]){
        $programe_info = $this->CompanyinfoModel->findCompanyById(1);
        $programe_array = json_decode($programe_info->programe_days, true);
        $ids = json_decode($_REQUEST[$form_field], true);
        foreach ($ids as $value) {
            $programe_array = array_diff_key($programe_array, [$value=>'nothing']);
        }
        $save_array['programe_days'] = json_encode($programe_array);
        $programe_info->assign($save_array);
        if($programe_info->save()){
            $resp = ['success'=>true, 'data'=>['msg'=>' Deleted Successfully',]];
            $this->jsonResponse($resp);
        }else{
            $resp = ['failure'=>true, 'data'=>['msg'=>' Delete Operation Failed',]];
            $this->jsonResponse($resp);
        }
    }
// END OF PROGRAME REGION
    
// TERMS REGION
    public function termsAction($id=1){
        $terms_info = $this->CompanyinfoModel->findCompanyById((int)$id);
        $this->view->displayErrors = $terms_info->getErrorMessages();
        $this->view->terms = $terms_info->terms_of_use;
        $this->view->privacy = $terms_info->privacy_policy;
        $this->view->postAction  = PROOT . DS . 'admin' . DS . 'branches' . DS . $terms_info->id;
        $this->view->setLayout('admindashboard');
        $this->view->render('admin/terms/terms');
    }

    public function companyinfoAction($id=1){
        $comp_info = $this->CompanyinfoModel->findCompanyById((int)$id);

        $this->view->displayErrors = $comp_info->getErrorMessages();
        $this->view->social_media = json_decode($comp_info->social_media);
        $this->view->comp_info = $comp_info;
        $this->view->postAction  = PROOT . 'home' . DS . 'admin' . DS . 'companyinfo' . DS . $comp_info->id;
        $this->view->setLayout('dashboard2');
        $this->view->render('admin/companyinfo/companyinfo');
    }
// END OF TERMS REGION

// ABOUT REGION
    public function aboutAction() {
        $about_info = $this->CompanyinfoModel->findCompanyById(1);
        $this->view->displayErrors = $about_info->getErrorMessages();
        $this->view->about = $about_info->about_org;
        
        $this->view->setLayout('admindashboard');
        $this->view->render('admin/about/index');
    }

    public function createaboutAction(){
        $about_info = $this->CompanyinfoModel->findCompanyById(1);
        if($this->request->isPost()){
            $about = $this->request->get();
            // $about_data['about_org'] = $about;
            $this->request->csrfCheck();
            $about_info->assign($about);
            if($about_info->save()){
                Session::addMsg('success', 'About Information Has Been Added Successfully!');
                Router::redirect('admin/about');
            }
        }

        $this->view->displayErrors = $about_info->getErrorMessages();
        $this->view->postAction  = PROOT . DS . 'admin' . DS . 'createabout';
        $this->view->setLayout('admindashboard');
        // $this->view->render('admin/about/about');
        $this->view->render('admin/about/add');
    }

    public function editaboutAction(){
        $about_info = $this->CompanyinfoModel->findCompanyById(1);
        if($this->request->isPost()){
            $this->request->csrfCheck();
            $about_info->assign($this->request->get());
            if($about_info->save()){
                Session::addMsg('success', 'About Information Edited Successfully!');
                Router::redirect('admin/about');
            }
        }

        $this->view->displayErrors = $about_info->getErrorMessages();
        $this->view->postAction  = PROOT . DS . 'admin' . DS . 'createabout';
        $this->view->about = $about_info->about_org;
        $this->view->setLayout('admindashboard');
        $this->view->render('admin/about/edit');
    }

    public function clearaboutAction(){
        $about_info = $this->CompanyinfoModel->findCompanyById(1);
        $field['about_org'] = NULL;
        $about_info->assign($field);
        if($about_info->save()){
            Session::addMsg('success', 'About Information Deleted Successfully!');
            Router::redirect('admin/about');
        }
        $this->view->displayErrors = $about_info->getErrorMessages();
        $this->view->setLayout('admindashboard');
        $this->view->render('admin/about/about');
    }
// END OF ABOUT REGION



    public function asyncSaveAction($fileElementName='', $fileSubFolder='', $ToDBdata='true', $id=1){
        $comp_info = $this->CompanyinfoModel->findCompanyById((int)$id);
        if($this->request->isPost()) {
            $form_value = $this->request->get();
            $filnameMsg = NULL;
            if(isset($_FILES[$fileElementName]) && !empty($_FILES[$fileElementName]["tmp_name"])){
                $file_name = $comp_info->savefile($comp_info, $fileElementName, $fileSubFolder);
                $form_value[$fileElementName] = $file_name;
                $filnameMsg = $file_name;
                if($ToDBdata == 'false'){
                    $old_data = $comp_info->sliders;
                    $resp = ['success'=>true, 'oldData'=>$old_data, 'data'=>['msg'=>$fileElementName.' Uploaded Successfully', 'filepath'=>$filnameMsg]];
                    $this->jsonResponse($resp);
                    return;
                }
            // }else {
            //     $this->request->csrfCheck();
            }

            $comp_info->assign($form_value);
            if($comp_info->save()){
                // Session::addMsg('success', 'New News Has Been Added Successfully!');
                // Router::redirect('news');
                $resp = ['success'=>true, 'data'=>['msg'=>$fileElementName.' Uploaded Successfully', 'filepath'=>$filnameMsg]];
                $this->jsonResponse($resp);
            }else {
                $resp = ['failure'=>false, 'data'=>['msg'=>$fileElementName.' Uploaded Failed']];
                $this->jsonResponse($resp);
            }
        }
    }

    public function uploadSliderAction($formField, $id=1){
        $comp_info = $this->CompanyinfoModel->findCompanyById((int)$id);
        if($this->request->isPost()) {
            $form_value['sliders'] = $_REQUEST[$formField];

            $comp_info->assign($form_value);
            if($comp_info->save()){
                $resp = ['success'=>true, 'data'=>['msg'=>' Uploaded Successfully',]];
                $this->jsonResponse($resp);
            }else {
                $resp = ['failure'=>false, 'data'=>['msg'=>' Uploaded Failed']];
                $this->jsonResponse($resp);
            }
        }
    }

    public function saveJsonAction($formField, $id=1){
        $comp_info = $this->CompanyinfoModel->findCompanyById((int)$id);
        if($this->request->isPost()) {
            $form_value[$formField] = $_REQUEST[$formField];
            $comp_info->assign($form_value);
            if($comp_info->save()){
                $resp = ['success'=>true, 'data'=>['msg'=>' Uploaded Successfully',]];
                $this->jsonResponse($resp);
            }else {
                $resp = ['failure'=>false, 'data'=>['msg'=>' Uploaded Failed']];
                $this->jsonResponse($resp);
            }
        }
    }

    public function testAjaxAction(){
        $resp = ['success'=>true, 'data'=>['id'=>23, 'name'=>'solomon', 'favorite_food'=>'beans']];
        $this->jsonResponse($resp);
    }
}
