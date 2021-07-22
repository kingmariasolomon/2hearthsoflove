<?php
namespace App\Controllers;
use Core\Controller;
use Core\H;
use Core\FH;
use Core\Session;
use Core\Router;
use App\Models\Users;
use App\Models\Companyinfo;

class HomeController extends Controller 
{
    public function __construct($controller, $action){
        parent::__construct($controller, $action);
        $this->load_model('Companyinfo');
    }

    public function indexAction(){
        $this->view->render('home/index');
    }

    // public function adminAction(){
    //     $this->view->setLayout('admindashboard');
    //     $this->view->render('admin/index');
    // }

    // public function companyinfoAction($id=1){
    //     $comp_info = $this->CompanyinfoModel->findCompanyById((int)$id);
    //     // if(!$comp_info) Router::redirect('comp_info');
    //     if($this->request->isPost()) {
    //         $this->request->csrfCheck();
    //         if(!empty($_FILES["photo"]["tmp_name"])){
    //             $form_value = $this->request->get();
    //             $file_name = $comp_info->savefile($comp_info, 'photo', 'comp_info');
    //             $form_value['photo'] = $file_name;
    //             $comp_info->assign($form_value);
    //         }else{
    //             $comp_info->assign($this->request->get());
    //         }
            
    //         if($comp_info->save()){
    //             Session::addMsg('success', 'Company Info Has Been Edited Successfully!');
    //             Router::redirect('comp_info');
    //         }
    //     }
    //     $this->view->displayErrors = $comp_info->getErrorMessages();
    //     $comp_info->sliders = json_decode($comp_info->sliders);
    //     $comp_info->social_media = json_decode($comp_info->social_media);
    //     $comp_info->programe_days = json_decode($comp_info->programe_days);
    //     $comp_info->branches = json_decode($comp_info->branches);
    //     $this->view->comp_info = $comp_info;
    //     $this->view->postAction  = PROOT . 'home' . DS . 'admin' . DS . 'companyinfo' . DS . $comp_info->id;
    //     $this->view->setLayout('admindashboard');
    //     $this->view->render('home/admin/companyinfo');
    // }

    // public function asyncSaveAction($fileElementName='', $fileSubFolder='', $ToDBdata='true', $id=1){
    //     $comp_info = $this->CompanyinfoModel->findCompanyById((int)$id);
    //     if($this->request->isPost()) {
    //         $form_value = $this->request->get();
    //         $filnameMsg = NULL;
    //         if(isset($_FILES[$fileElementName]) && !empty($_FILES[$fileElementName]["tmp_name"])){
    //             $file_name = $comp_info->savefile($comp_info, $fileElementName, $fileSubFolder);
    //             $form_value[$fileElementName] = $file_name;
    //             $filnameMsg = $file_name;
    //             if($ToDBdata == 'false'){
    //                 $old_data = $comp_info->sliders;
    //                 $resp = ['success'=>true, 'oldData'=>$old_data, 'data'=>['msg'=>$fileElementName.' Uploaded Successfully', 'filepath'=>$filnameMsg]];
    //                 $this->jsonResponse($resp);
    //                 return;
    //             }
    //         // }else {
    //         //     $this->request->csrfCheck();
    //         }

    //         $comp_info->assign($form_value);
    //         if($comp_info->save()){
    //             // Session::addMsg('success', 'New News Has Been Added Successfully!');
    //             // Router::redirect('news');
    //             $resp = ['success'=>true, 'data'=>['msg'=>$fileElementName.' Uploaded Successfully', 'filepath'=>$filnameMsg]];
    //             $this->jsonResponse($resp);
    //         }else {
    //             $resp = ['failure'=>false, 'data'=>['msg'=>$fileElementName.' Uploaded Failed']];
    //             $this->jsonResponse($resp);
    //         }
    //     }
    // }

    // public function uploadSliderAction($formField, $id=1){
    //     $comp_info = $this->CompanyinfoModel->findCompanyById((int)$id);
    //     if($this->request->isPost()) {
    //         $form_value['sliders'] = $_REQUEST[$formField];
    //         // $form_value = $this->request->get();
    //         // $form_value['sliders'] = json_encode($this->request->get('sliders'));
    //         // if(!empty($_FILES[$fileElementName]["tmp_name"])){
    //         //     $file_name = $comp_info->savefile($comp_info, $fileElementName, 'comp_info');
    //         //     $form_value[$fileElementName] = $file_name;
    //         //     $filnameMsg = $file_name;
    //         // }else {
    //         //     $this->request->csrfCheck();
    //         // }

    //         $comp_info->assign($form_value);
    //         if($comp_info->save()){
    //             // Session::addMsg('success', 'New News Has Been Added Successfully!');
    //             // Router::redirect('news');
    //             $resp = ['success'=>true, 'data'=>['msg'=>' Uploaded Successfully',]];
    //             $this->jsonResponse($resp);
    //         }else {
    //             $resp = ['failure'=>false, 'data'=>['msg'=>' Uploaded Failed']];
    //             $this->jsonResponse($resp);
    //         }
    //     }
    // }

    // public function saveJsonAction($formField, $id=1){
    //     $comp_info = $this->CompanyinfoModel->findCompanyById((int)$id);
    //     if($this->request->isPost()) {
    //         $form_value[$formField] = $_REQUEST[$formField];
    //         $comp_info->assign($form_value);
    //         if($comp_info->save()){
    //             $resp = ['success'=>true, 'data'=>['msg'=>' Uploaded Successfully',]];
    //             $this->jsonResponse($resp);
    //         }else {
    //             $resp = ['failure'=>false, 'data'=>['msg'=>' Uploaded Failed']];
    //             $this->jsonResponse($resp);
    //         }
    //     }
    // }

    public function testAjaxAction(){
        $resp = ['success'=>true, 'data'=>['id'=>23, 'name'=>'solomon', 'favorite_food'=>'beans']];
        $this->jsonResponse($resp);
    }
}
