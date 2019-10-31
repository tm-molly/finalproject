
<?php

session_start();


   function __autoload($className){
   	//echo $className;
   	//$className = str_replace('\\', '/',$className);
      require_once($className.'.php');
   }


 use controllers\MainController;
   $controller = new MainController();
  require_once "views/".$controller->process().".php";

  // echo $controller->process();

?>

