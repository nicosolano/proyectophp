<?php

require_once "../../functions/autoload.php";

$postData = $_POST;
$login = (new Autenticacion())->log_in($postData["username"], $postData["password"]);
if($login){
    header("Location: ../index.php?sec=dashboard");
}else{
    header("Location: ../index.php?sec=login");
}

?>