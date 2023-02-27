<?php
class IndexController{

  public function index(){
    return view("index.view.php",[
      'heading' => 'Home',
    ]);
  }

}


?>


