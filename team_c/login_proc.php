<?php
    include_once "db/db_user.php";
    session_start();

    $uid = $_POST["uid"];
    $upw = $_POST["upw"];

    $param = [
        "uid" => $uid
    ];

    $result = sel_user($param);

    if(empty($result) || $upw !== $result["upw"])
    {
        echo "<script>alert('아이디 또는 비밀번호를 잘못 입력했습니다.');";
        echo "location.href='login.php';</script>";
    }
    else
    {
        $_SESSION["login_user"] = $result;
        header("location: main.php");
    }