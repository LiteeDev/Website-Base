<?php

  /* Require the neccesary files */
  require_once 'classes/loader.php';


  $Router->respond('/', function ($request)
  {
    $Smarty = new SmartyBC();
    $Smarty->template_dir = 'public/templates/';
    $Smarty->compile_dir  = 'public/templates_c/';
    $Smarty->display("home.tpl");
  });

/* Error Handler */
require_once 'classes/error_handler.php';

/* Dispatch Code */
$Router->dispatch();
?>
