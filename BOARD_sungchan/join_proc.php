<?php
    include_once "db_user.php";

    $email = $_POST["email"];
    $pw = $_POST["pw"];
    $pw_confirm = $_POST["pw_confirm"];
    $nm = $_POST["nm"];

    $param = [
        "email" => $email,
        "pw" => $pw,
        "nm" => $nm,   
    ];
    print_r($param);
    
    
    $result = ins_user($param);
    header("location:login.php");
 