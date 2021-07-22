<?php
namespace App\Controllers;
use Core\Controller;
use Core\H;
use Core\Session;
use Core\Router;
use App\Models\Medias;
use App\Models\Categories;

class MediaController extends Controller 
{
    public function __construct($controller, $action){
        parent::__construct($controller, $action);
        $this->view->setLayout('template1');
        $this->load_model('Medias');
    }

    public function indexAction(){
        $this->view->render('media/index');
    }

    public function GalleryAction(){
        $this->load_model('Categories');
        $category = $this->CategoriesModel->findTypeCategory("main_media");
        $vid = null;
        foreach ($category as $value) {
            if($value->title == "Photo Gallery")    $vid = $value->id;
        }
        $media = $this->MediasModel->findByCategory($vid, ['order'=>'date DESC']);
        $subcat = $this->CategoriesModel->findTypeCategory("sub_media");
        $sub_array=[];
        foreach ($subcat as $value) {
            foreach ($media as $k => $v) {
                if($v->sub_cat_id == $value->id)    $sub_array[$value->id] = $value->title;
            }
        }
        $this->view->medias = $media;
        $this->view->sub = array_unique($sub_array);
        $this->view->render('media/gallery');
    }


// MEDIA CATEGORIES REGION
    public function mediacategoryAction(){
        $this->load_model('Categories');
        $category = $this->CategoriesModel->findTypeCategory("main_media", ['order'=>'id DESC']);
        $this->view->categories = $category;
        $this->view->setLayout('admindashboard');
        $this->view->render('admin/media/cat/index');
    }

    public function mediaaddcategoryAction() {
        $this->load_model('Categories');
        $category = new Categories();
        if($this->request->isPost()) {
            $this->request->csrfCheck();
            $category->assign($this->request->get());
            if($category->save()){
                Session::addMsg('success', 'New category Has Been Added Successfully!');
                Router::redirect('media/mediacategory');
            }
        }
        // $this->view->category = $category;
        $this->view->displayErrors = $category->getErrorMessages();
        $this->view->postAction = PROOT . 'media' . DS . 'mediaaddcategory';
        $this->view->setLayout('admindashboard');
        $this->view->render('admin/media/cat/catadd');
    }

    public function mediaeditcategoryAction($id) {
        $this->load_model('Categories');
        $category = $this->CategoriesModel->findById((int)$id);
        if(!$category) Router::redirect('media/mediacategory');
        if($this->request->isPost()) {
            $this->request->csrfCheck();
            $category->assign($this->request->get());
            if($category->save()){
                Session::addMsg('success', 'category Has Been Edited Successfully!');
                Router::redirect('media/mediacategory');
            }
        }
        $this->view->displayErrors = $category->getErrorMessages();
        $this->view->category  = $category;
        $this->view->postAction  = PROOT . 'media' . DS . 'mediaeditcategory' . DS . $category->id;
        $this->view->setLayout('admindashboard');
        $this->view->render('admin/media/cat/catedit');
    }

    public function mediadeletecategoryAction($id) {
        $this->load_model('Categories');
        $category = $this->CategoriesModel->findById((int)$id);
        if($category){
            $category->delete();
            Session::addMsg('success', 'category Has Been Deleted!');
        }
        Router::redirect('media/mediacategory');
    }

    public function mediadeletemultiplecategoryAction($form_field, $ids=[]){
        $this->load_model('Categories');
        $ids = json_decode($_REQUEST[$form_field], true);
        foreach ($ids as $value) {
            $category = $this->CategoriesModel->findById((int)$value);
            if($category){
                $category->delete();
            }
        }
        $resp = ['success'=>true, 'data'=>['msg'=>' Uploaded Successfully',]];
        $this->jsonResponse($resp);
    }
// END OF MEDIA CATEGORIES REGION

// MEDIA SUB CATEGORIES REGION
    public function mediasubcategoryAction(){
        $this->load_model('Categories');
        $category = $this->CategoriesModel->findTypeCategory("sub_media", ['order'=>'id DESC']);
        $this->view->categories = $category;
        $this->view->setLayout('admindashboard');
        $this->view->render('admin/media/sub/index');
    }

    public function mediaaddsubcategoryAction() {
        $this->load_model('Categories');
        $category = new Categories();
        if($this->request->isPost()) {
            $this->request->csrfCheck();
            $category->assign($this->request->get());
            if($category->save()){
                Session::addMsg('success', 'New category Has Been Added Successfully!');
                Router::redirect('media/mediasubcategory');
            }
        }
        // $this->view->category = $category;
        $this->view->displayErrors = $category->getErrorMessages();
        $this->view->postAction = PROOT . 'media' . DS . 'mediaaddsubcategory';
        $this->view->setLayout('admindashboard');
        $this->view->render('admin/media/sub/subadd');
    }

    public function mediaeditsubcategoryAction($id) {
        $this->load_model('Categories');
        $category = $this->CategoriesModel->findById((int)$id);
        if(!$category) Router::redirect('media/mediasubcategory');
        if($this->request->isPost()) {
            $this->request->csrfCheck();
            $category->assign($this->request->get());
            if($category->save()){
                Session::addMsg('success', 'category Has Been Edited Successfully!');
                Router::redirect('media/mediasubcategory');
            }
        }
        $this->view->displayErrors = $category->getErrorMessages();
        $this->view->category  = $category;
        $this->view->postAction  = PROOT . 'media' . DS . 'mediaeditsubcategory' . DS . $category->id;
        $this->view->setLayout('admindashboard');
        $this->view->render('admin/media/sub/subedit');
    }

    public function mediadeletesubcategoryAction($id) {
        $this->load_model('Categories');
        $category = $this->CategoriesModel->findById((int)$id);
        if($category){
            $category->delete();
            Session::addMsg('success', 'category Has Been Deleted!');
        }
        Router::redirect('media/mediasubcategory');
    }

    public function mediadeletemultiplesubcategoryAction($form_field, $ids=[]){
        $this->load_model('Categories');
        $ids = json_decode($_REQUEST[$form_field], true);
        foreach ($ids as $value) {
            $category = $this->CategoriesModel->findById((int)$value);
            if($category){
                $category->delete();
            }
        }
        $resp = ['success'=>true, 'data'=>['msg'=>' Uploaded Successfully',]];
        $this->jsonResponse($resp);
    }
// END OF MEDIA SUB CATEGORIES REGION

// MEDIA REGION
    public function mediaAction(){
        $media = $this->MediasModel->findAll(['order'=>'date DESC']);
        $this->view->medias = $media;
        $this->view->setLayout('dashboard2');
        $this->view->render('admin/media/index');
    }

    public function addMediaAction(){
        $media = $this->MediasModel->findAll();
        
        $this->load_model('Categories');
        $category = $this->CategoriesModel->findTypeCategory("main_media");
        $cat_array=[];
        foreach ($category as $value) {
            $cat_array[$value->id] = $value->title;
        }
        $subcat = $this->CategoriesModel->findTypeCategory("sub_media");
        $sub_array=[];
        foreach ($subcat as $value) {
            $sub_array[$value->id] = $value->title;
        }

        $media = new Medias();
        if($this->request->isPost()) {
            $this->request->csrfCheck();
            $confirm = false;
            $form_value = $this->request->get();//H::dnd(($_FILES['media']));
            if($_FILES['media']['tmp_name'] != ''){
                // $returnArray = [];
                for ($count=0; $count < count($_FILES['media']['tmp_name']); $count++) { 
                    // $returnArray[$count] = $media->savefile($media, 'media', 'media', $count);
                    $form_value["media"] = $media->savefile($media, 'media', 'media', $count);
                    $media->assign($form_value);
                    if($media->save()){
                        $confirm = true;
                    }
                }           
            }
            // echo json_encode($returnArray);
            if($confirm){
                Session::addMsg('success', 'New Media Programe Has Been Added Successfully!');
                Router::redirect('media/media');
            }
        }

        $this->view->cat = $cat_array;
        $this->view->sub = $sub_array;
        $this->view->medias = $media;
        $this->view->displayErrors = $media->getErrorMessages();
        $this->view->postAction = PROOT . 'media' . DS . 'addMedia';
        $this->view->setLayout('dashboard2');
        $this->view->render('admin/media/add');
    }

    public function multipleimageAction(){
        $media = new Medias();
        if($_FILES['media']['tmp_name'] != ''){
            $returnArray = [];
            for ($count=0; $count < count($_FILES['media']['tmp_name']); $count++) { 
                $returnArray[$count] = $media->savefile($media, 'media', 'media', $count);
            }           
        }
        echo json_encode($returnArray);
    }

    public function editMediaAction($id){
        $media = $this->MediasModel->findMediaById((int)$id);

        $this->load_model('Categories');
        $category = $this->CategoriesModel->findTypeCategory("main_media");
        $cat_array=[];
        foreach ($category as $value) {
            $cat_array[$value->id] = $value->title;
        }
        $subcat = $this->CategoriesModel->findTypeCategory("sub_media");
        $sub_array=[];
        foreach ($subcat as $value) {
            $sub_array[$value->id] = $value->title;
        }

        if($this->request->isPost()) {
            $this->request->csrfCheck();
            $form_value = $this->request->get();
            if(!empty($_FILES["media"]["tmp_name"])){
                $file_name = $media->savefile($media, 'media', 'media');
                $form_value['media'] = $file_name;
            }
            $media->assign($form_value);
            if($media->save()){
                Session::addMsg('success', 'Media Information Has Been Updated Successfully!');
                Router::redirect('media/media');
            }
        }
        $this->view->cat = $cat_array;
        $this->view->sub = $sub_array;
        $this->view->displayErrors = $media->getErrorMessages();
        $this->view->postAction = PROOT . 'media' . DS . 'editMedia' .DS . $media->id;
        $this->view->medias = $media;
        $this->view->setLayout('dashboard2');
        $this->view->render('admin/media/edit');
    }

    public function deleteMediaAction($id){
        $media = $this->MediasModel->findById((int)$id);
        if($media){
            if($media->delete()){
                Session::addMsg('success', 'Media Has Been Delete Successfully!');
                Router::redirect('media/media');
            }
        }
    }

    public function deletemultipleMediasAction($form_field, $ids=[]){
        $ids = json_decode($_REQUEST[$form_field], true);
        foreach ($ids as $value) {
            $media = $this->MediasModel->findById((int)$value);
            if($media){
                $media->delete();
            }
        }
        $resp = ['success'=>true, 'data'=>['msg'=>' Deleted Successfully',]];
        $this->jsonResponse($resp);
    }
// END OF MEDIA REGION





    public function testAjaxAction(){
        $resp = ['success'=>true, 'data'=>['id'=>23, 'name'=>'solomon', 'favorite_food'=>'beans']];
        $this->jsonResponse($resp);
    }
}
