<?php

session_start();

error_reporting(E_ERROR | E_PARSE);


$root = str_replace("\\", "/", __DIR__);
$app = $root."/app";
$public = $root."/public";


define('FPDF_FONTPATH',"$app/control/pdf/font/");

$dir = explode("htdocs",$root)[1];

$path = explode("?", $_SERVER["REQUEST_URI"])[0];


if (!isset($_SESSION['admin'])) {
    $_SESSION['admin']['loggedin'] =false;
}

function redirect($path = "/")
{
    $path = ltrim($path, "/");
    if (headers_sent()) {
        die("<script>window.location='/$path';</script>");
    } else {
        header("Location: /$path");
        header($_SERVER["SERVER_PROTOCOL"] . " 302 Found", true, 302);
    }
}


$db = include "$root/app/control/database.php";


if (file_exists("$app/control$path.php")) {
    include "$app/control$path.php";
} else {
   
    $partial_path = "/" . strtok($path, "/");
    do{
        $partial_path = "/".$new_token;
        $absolute_path = "$app/control$partial_path.php";
        if (file_exists($absolute_path)) {            
            include $absolute_path;
            break;
        }
        $partial_path .= "/";
    }while($new_token = strtok("/"));

}


$prefix = explode("/", $path)[1];

if (file_exists("$app/view$path.php")) {
    include "$app/view$path.php";
} else {
    $partial_path = "/" . strtok($path, "/");
    do{
        $partial_path = "/".$new_token;
        $absolute_path = "$app/view$partial_path.php";
        if (file_exists($absolute_path)) {            
            include $absolute_path;
            exit;
        }
        $partial_path .= "/";
    }while($new_token = strtok("/"));
    
    include "$root/app/view/default.php";
}
?>