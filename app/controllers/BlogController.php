<?php
namespace App\Controllers;
use Core\Controller;
use Core\H;
use Core\Session;
use Core\Router;
use App\Models\Users;
use App\Models\Blogs;
use App\Models\Categories;
use App\Models\Comments;

class BlogController extends Controller 
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

    public function pageAction($current_page, $keyword=''){
        $limit = 5; //THIS MUST ALSO BE SET TO BE THE SAME IN BLOGS INDEX PAGE IN $paging->set('perpage',1);
                    // SETTING THIS FROM THE  URL WILL CAUSE SECURITY ISSUES
        $start = ($current_page - 1) * $limit;//H::dnd(empty($keyword));
        if(empty($keyword)){
            $blog = $this->BlogsModel->findAllApproved(1, ['order'=>'date DESC', "limit"=>$start. ', '.$limit]);
        }else{
            $blog = $this->BlogsModel->searchApproved(1, $keyword, ['order'=>'date DESC', "limit"=>$start. ', '.$limit]);
        }
        
        $allApprovedBlog = $this->BlogsModel->findAllApproved(1, ['order'=>'date DESC']);
        array_multisort(array_column($allApprovedBlog, "no_of_views"), SORT_DESC, $allApprovedBlog);

        $user_array = $this->getAuthor();
        foreach ($blog as $k => $v) {
            $v->author = $user_array[$v->user_id];
        }

        $cat_array = $this->getCategory($allApprovedBlog);

        $this->view->categories = $cat_array;
        $this->view->blogs = $blog;
        $this->view->popular = array_slice($allApprovedBlog,0, 3);
        $this->view->total = (is_array($allApprovedBlog))? count($allApprovedBlog): null;
        $this->view->render('blog/index');
    }

    public function pagecategoryAction($current_page, $cat_id=null){
        $limit = 5; //THIS MUST ALSO BE SET TO BE THE SAME IN BLOGS INDEX PAGE IN $paging->set('perpage',1);
                    // SETTING THIS FROM THE  URL WILL CAUSE SECURITY ISSUES
        $start = ($current_page - 1) * $limit;
        $blog = $this->BlogsModel->findByCategoryApproved(1, $cat_id, ['order'=>'date DESC', "limit"=>$start. ', '.$limit]);
        
        $allApprovedBlog = $this->BlogsModel->findAllApproved(1, ['order'=>'date DESC']);
        array_multisort(array_column($allApprovedBlog, "no_of_views"), SORT_DESC, $allApprovedBlog);

        $user_array = $this->getAuthor();
        foreach ($blog as $k => $v) {
            $v->author = $user_array[$v->user_id];
        }

        $cat_array = $this->getCategory($allApprovedBlog);

        $this->view->categories = $cat_array;
        $this->view->blogs = $blog;
        $this->view->popular = array_slice($allApprovedBlog,0, 3);
        $this->view->total = (is_array($allApprovedBlog))? count($allApprovedBlog): null;
        $this->view->render('blog/index');
    }
    public function detailsAction($id){
        $blog = $this->BlogsModel->findById((int)$id);
        $allApprovedBlog = $this->BlogsModel->findAllApproved(1, ['order'=>'date DESC']);
        array_multisort(array_column($allApprovedBlog, "no_of_views"), SORT_DESC, $allApprovedBlog);
        if(!$blog) Router::redirect('blog');
        $blog->assign(['no_of_views'=> $blog->no_of_views+1]);
        if(!$blog->save()){
            // LOG THIS ERROR TO A LOG FILE
        }
        
        $this->load_model('Users');
        $user = $this->UsersModel->findUserById($blog->user_id)[0];
        $blog->author['name'] = $user->username;
        $blog->author['email'] = $user->email;
        $blog->author['phone'] = $user->phone;
        $blog->author['pix'] = $user->pix;

        $cat_array = $this->getCategory($allApprovedBlog);
        
        $this->load_model('Comments');
        $blog_comment = $this->CommentsModel->findAllBlogId($id, ['order'=>'id DESC']);

        $this->view->blog  = $blog;
        $this->view->categories = $cat_array;
        $this->view->popular = array_slice($allApprovedBlog,0, 3);
        $this->view->comment = $blog_comment;
        $this->view->render('blog/details');
    }

    protected function getAuthor(){
        $this->load_model('Users');
        $user = $this->UsersModel->findAll();
        $user_array = [];
        foreach ($user as $u => $uv) {
            $user_array[$uv->id]['name'] = $uv->username;
            $user_array[$uv->id]['email'] = $uv->email;
            $user_array[$uv->id]['phone'] = $uv->phone;
            $user_array[$uv->id]['pix'] = $uv->pix;
        }
        return $user_array;
    }

    protected function getCategory($param){
        $this->load_model('Categories');
        $category = $this->CategoriesModel->findTypeCategory("blog", ['order'=>'id DESC']);
        $cat_array=[];
        $count_array=[];
        foreach ($category as $value) {
            $count_array[$value->id] = [];
            foreach ($param as $bv) {
                if ($value->id === $bv->cat_id) {
                    $count_array[$value->id][] = $bv->title;
                }
            }
            $cat_array[count($count_array[$value->id])."-$value->id"] = $value->title;
        }
        return $cat_array;
    }


// BLOGS REGION
    public function blogsAction(){
        $blog = $this->BlogsModel->findAll(['order'=>'date DESC']);
        $this->view->blogs = $blog;
        $this->view->setLayout('admindashboard');
        $this->view->render('admin/blogs/index');
    }

    public function addblogAction() {
        $blog = new Blogs();

        $this->load_model('Categories');
        $category = $this->CategoriesModel->findTypeCategory("blog", ['order'=>'id DESC']);
        $cat_array=[];
        foreach ($category as $value) {
            $cat_array[$value->id] = $value->title;
        }

        if($this->request->isPost()) {
            $this->request->csrfCheck();
            $form_value = $this->request->get();
            if(!empty($_FILES["pix"]["tmp_name"])){
                $file_name = $blog->savefile($blog, 'pix', 'blogs');
                $form_value['pix'] = $file_name;
            }
            $blog->assign($form_value);
            $blog->user_id = Users::currentUser()->id;
            if($blog->save()){
                Session::addMsg('success', 'New blog Has Been Added Successfully!');
                Router::redirect('blog/blogs');
            }
        }
        // $this->view->blogs = $blog;
        $this->view->categories = $cat_array;
        $this->view->displayErrors = $blog->getErrorMessages();
        $this->view->postAction = PROOT . 'blog' . DS . 'addblog';
        $this->view->setLayout('admindashboard');
        $this->view->render('admin/blogs/add');
    }

    public function editblogAction($id) {
        $blog = $this->BlogsModel->findById((int)$id);
        if(!$blog) Router::redirect('blog/blogs');

        $this->load_model('Categories');
        $category = $this->CategoriesModel->findTypeCategory("blog", ['order'=>'id DESC']);
        $cat_array=[];
        foreach ($category as $value) {
            $cat_array[$value->id] = $value->title;
        }

        if($this->request->isPost()) {
            $this->request->csrfCheck();
            $form_value = $this->request->get();
            if(!empty($_FILES["pix"]["tmp_name"])){
                $file_name = $blog->savefile($blog, 'pix', 'blogs');
                $form_value['pix'] = $file_name;
            }
            $blog->assign($form_value);
            if($blog->save()){
                Session::addMsg('success', 'blog Has Been Edited Successfully!');
                Router::redirect('blog/blogs');
            }
        }
        $this->view->displayErrors = $blog->getErrorMessages();
        $this->view->blog  = $blog;
        $this->view->categories = $cat_array;
        $this->view->postAction  = PROOT . 'blog' . DS . 'editblog' . DS . $blog->id;
        $this->view->setLayout('admindashboard');
        $this->view->render('admin/blogs/edit');
    }

    public function deleteblogAction($id) {
        $blog = $this->BlogsModel->findById((int)$id);
        if($blog){
            $blog->delete();
            Session::addMsg('success', 'blog Has Been Deleted!');
        }
        Router::redirect('blog/blogs');
    }

    public function deletemultipleblogsAction($form_field, $ids=[]){
        $ids = json_decode($_REQUEST[$form_field], true);
        foreach ($ids as $value) {
            $blog = $this->BlogsModel->findById((int)$value);
            if($blog){
                $blog->delete();
            }
        }
        $resp = ['success'=>true, 'data'=>['msg'=>' Uploaded Successfully',]];
        $this->jsonResponse($resp);
    }

    
    public function approveBlogAction($id){
        $blog = $this->BlogsModel->findById((int)$id);
        if(!$blog){
            $resp = ['failed'=>true, 'data'=>['msg'=>' data could not be found',]];
            $this->jsonResponse($resp);
        }
        if($this->request->isPost()) {
            $blog->assign($this->request->get());
            if($blog->save()){
                $resp_txt = ($this->request->get()['approved'] == 1)? "Approved!" : "Disapproved!";
                $resp = ['success'=>true, 'data'=>['msg'=>$resp_txt,]];
                $this->jsonResponse($resp);
            }
        }
    }
// END OF BLOGS REGION

// BLOG CATEGORIES REGION
    public function categoriesAction(){
        $this->load_model('Categories');
        $category = $this->CategoriesModel->findTypeCategory("blog", ['order'=>'id DESC']);
        $this->view->categories = $category;
        $this->view->setLayout('admindashboard');
        $this->view->render('admin/blogs/categories/index');
    }

    public function addcategoryAction() {
        $this->load_model('Categories');
        $category = new Categories();
        if($this->request->isPost()) {
            $this->request->csrfCheck();
            $category->assign($this->request->get());
            if($category->save()){
                Session::addMsg('success', 'New category Has Been Added Successfully!');
                Router::redirect('blog/categories');
            }
        }
        // $this->view->category = $category;
        $this->view->displayErrors = $category->getErrorMessages();
        $this->view->postAction = PROOT . 'blog' . DS . 'addcategory';
        $this->view->setLayout('admindashboard');
        $this->view->render('admin/blogs/categories/add');
    }

    public function editcategoryAction($id) {
        $this->load_model('Categories');
        $category = $this->CategoriesModel->findIdAndTypeCategory($id, "blog");
        if(!$category) Router::redirect('blog/categories');
        if($this->request->isPost()) {
            $this->request->csrfCheck();
            $category->assign($this->request->get());
            if($category->save()){
                Session::addMsg('success', 'category Has Been Edited Successfully!');
                Router::redirect('blog/categories');
            }
        }
        $this->view->displayErrors = $category->getErrorMessages();
        $this->view->category  = $category;
        $this->view->postAction  = PROOT . 'blog' . DS . 'editcategory' . DS . $category->id;
        $this->view->setLayout('admindashboard');
        $this->view->render('admin/blogs/categories/edit');
    }

    public function deletecategoryAction($id) {
        $this->load_model('Categories');
        $category = $this->CategoriesModel->findIdAndTypeCategory($id, "blog");
        if($category){
            $category->delete();
            Session::addMsg('success', 'category Has Been Deleted!');
        }
        Router::redirect('blog/categories');
    }

    public function deletemultiplecategoriesAction($form_field, $ids=[]){
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
// END OF BLOG CATEGORIES REGION




    public function testAjaxAction(){
        $resp = ['success'=>true, 'data'=>['id'=>23, 'name'=>'solomon', 'favorite_food'=>'beans']];
        $this->jsonResponse($resp);
    }
}
