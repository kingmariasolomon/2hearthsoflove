<?php
namespace App\Controllers;
use Core\Controller;
use App\Models\Users;

class BuildtablesController extends Controller 
{
    public function __construct($controller, $action){
        parent::__construct($controller, $action);
        $this->load_model('Buildtables');
        $this->view->setLayout('default');
    }

    public function indexAction(){
        $Buildtables = $this->BuildtablesModel->runAll();
        $this->view->Buildtables = $Buildtables;
        $this->view->render('Buildtables/index');
    }

}
