<?php
namespace App\Controllers;
use Core\Controller;
use Core\H;
use App\Models\Users;
use App\Models\Companyinfo;

class AboutController extends Controller 
{
    public function __construct($controller, $action){
        parent::__construct($controller, $action);
        $this->load_model('Companyinfo');
        $this->view->setLayout('template1');
    }

    public function indexAction(){
        $about_info = $this->CompanyinfoModel->findCompanyById(1);
        $this->view->displayErrors = $about_info->getErrorMessages();
        $this->view->about = $about_info->about_org;
        $this->view->programes = json_decode($about_info->programe_days);

        $this->view->render('about/index');
    }

    public function testAjaxAction(){
        $resp = ['success'=>true, 'data'=>['id'=>23, 'name'=>'solomon', 'favorite_food'=>'beans']];
        $this->jsonResponse($resp);
    }
}
