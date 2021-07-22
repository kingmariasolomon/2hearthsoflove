<?php
namespace App\Controllers;
use Core\Controller;
use Core\H;
use Core\Session;
use Core\Router;
use App\Models\Users;
use App\Models\Comments;

class CommentsController extends Controller 
{
    public function __construct($controller, $action){
        parent::__construct($controller, $action);
        $this->view->setLayout('template1');
        $this->load_model('Comments');
    }
    
    public function indexAction(){
        Router::redirect('blog/page/1');
        // $this->view->render('blog/index');
    }

    public function addAction(){
        $comment = new Comments();
        if($this->request->isPost()) {
            $this->request->csrfCheck();
            $comment->user_id = (Users::currentUser())? Users::currentUser()->id : 01;
            $username = (Users::currentUser())? Users::currentUser()->username : "Anonymouse";
            $comment->assign($this->request->get());
            if($comment->save()){
                $resp = ['success'=>true, 'msg'=>'Your Comment Was Saved', 'data'=>["pix"=> $comment->pix, "name"=> $username, "comment"=> $comment->comment, "id"=> $comment->id]];
                $this->jsonResponse($resp);
            }else {
                $resp = ['error'=>true, 'msg'=>'Data Could Not Be Saved'];
                $this->jsonResponse($resp);
            }
        }
    }

    public function editAction($id){
        $comment = $this->CommentsModel->findByIdAndUserId((int)$id, Users::currentUser()->id);
        if($comment){return 0;
            if($this->request->isPost()) {
                $this->request->csrfCheck();
                $username = (Users::currentUser())? Users::currentUser()->username : "Anonymouse";
                $comment->assign($this->request->get());
                if($comment->save()){
                    $resp = ['success'=>true, 'msg'=>'Your Comment Was Edited', 'data'=>["pix"=> $comment->pix, "name"=> $username, "comment"=> $comment->comment]];
                    $this->jsonResponse($resp);
                }else {
                    $resp = ['error'=>true, 'msg'=>'Data Could Not Be Edited'];
                    $this->jsonResponse($resp);
                }
            }
        }
        $resp = ['error'=>true, 'msg'=>'Sorry! An Error Occured'];
        $this->jsonResponse($resp);
    }

    public function deleteAction($id) {
        $comment = $this->CommentsModel->findByIdAndUserId((int)$id, Users::currentUser()->id);
        if($comment){
            $comment->delete();
            $resp = ['success'=>true, 'msg'=>'Your Comment Was Deleted'];
            $this->jsonResponse($resp);
        }
        $resp = ['error'=>true, 'msg'=>'Sorry! An Error Occured'];
        $this->jsonResponse($resp);
    }



    public function testAjaxAction(){
        $resp = ['success'=>true, 'data'=>['id'=>23, 'name'=>'solomon', 'favorite_food'=>'beans']];
        $this->jsonResponse($resp);
    }
}
