<?php
    include_once "db/db_user.php";

    $nm = $_POST["nm"];
    $uid = $_POST["uid"];
    $upw = $_POST["upw"];
    $gender = $_POST["gender"];

    $param = [
        "nm" => $nm,
        "uid" => $uid,
        "upw" => $upw,
        "gender" => $gender
    ];

    ins_user($param);

    header("location:login.php");