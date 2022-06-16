<?php
include_once "db_user.php";


$nm = $_POST["nm"];
$pw = $_POST["pw"];


$param = [
    "nm" => $nm,        
];


$result = sel_user($param);


if(empty($result)) {
    echo "해당하는 아이디 없음";
    die;
}



if($pw === $result["pw"]) {       
    $_SESSION["login_user"] = $result;
    header("Location: list.php");
} else {
    header("Location: login.php");
}