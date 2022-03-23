<?php

header('Access-Control-Allow-Origin:*'); // * OR 

header('Content-Type: application/json ; charset=utf-8');
//  header('Content-Type: multipart/form-data'); // ** FormData, for image uploading
header("Access-Control-Allow-Methods: "); // TODO: POST,GET,DELETE,PUT
header("Access-Control-Max-Age: 600");
header("Access-Control-Allow-Headers:");

require_once "../modal/Methods.php";

class Controller
{
    public function categories()
    {
        $cats = new Methods();
        $json = json_encode($cats->getCat());
        echo $json;
    }
    public function SelectOne($id)
    {
        $cats = new Methods();
        $json = json_encode($cats->SoleCat($id));
        echo $json;
    }

    public function add($name)
    {
        
        $cats = new Methods();
        $json = json_encode($cats->addCat($name));
        echo $json;
    }


    
}

?>