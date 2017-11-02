<?php
class ControllerIndex extends Controller {

    public function __construct()
    {
        parent::__construct();
        $this->model = new ModelIndex();
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


}