<?php

class ControllerDesk extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->model = new ModelDesk();
        $this->view = new View();
    }

    public function actionView()
    {
        $data = $this->model->getAllAdv();
        $this->view->render('Объявления', 'desk/index.php', 'template.php', $data);
    }

    public function actionAdv()
    {
        $id = trim(strip_tags(intval($_GET['id'])));
        if($id == NULL || $id == '' || $id == '0') header('Location: adv');
        if(intval($id)) {
            $data = $this->model->getAdvByID($id);
            if($data == NULL) header('Location: 404');
            else $this->view->render('Объявление № '.$id,'desk/adv.php','template.php',$data);
        }else {
            header('Location: 404');
        }
    }

    public function actionNewAdv()
    {
        if(isset($_POST['newadv']))
        {
            $title = $_POST['title'];
            $text = $_POST['text'];
            $type = $_POST['type'];
            $cat = $_POST['category'];
            $creator = $_POST['creator'];
            $tel = $_POST['tel'];
            $date = date('d-m-Y H:i:s');

            $this->model->newAdv($title,$text,$type,$cat,$creator,$tel,$date);
            $this->view->render('Новое объявление','desk/newadv.php','template.php',$data = null);
        }else {
            $this->view->render('Новое объявление','desk/newadv.php','template.php',$data = null);
        }
    }


}