<?php
require "./Controller.php";

$test=new Controller();
$method=$_SERVER["REQUEST_METHOD"];
switch($method)
 {
     case 'GET' :
        if(isset($_GET['id']))
        {
         $test->SelectOne($id);
        }
        else{
            $test->categories();
        }
    break;
  
    case 'POST':
        $name = $_POST['name'];
        if(isset($name))
        {
            $test->add($name);
        }
 }
