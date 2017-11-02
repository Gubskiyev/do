<?php
class Controller404 extends Controller {
   public function __construct()
   {
       parent::__construct();
       $this->view = new View();
   }

   public function actionView()
   {
       $this->view->render("404","404/index.php", "template.php");
   }


}