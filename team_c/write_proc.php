<?php
    include_once "db/db_board.php";
    session_start();

    if(isset($_SESSION["login_user"]));
    {
        $login_user = $_SESSION["login_user"];
    }

    $title = $_POST["title"];
    $ctnt = $_POST["ctnt"];
    $i_user = $login_user["i_user"];
    $img_file = $_FILES["img_name"];
 

    

    $DateAndTime = date('_y_m_d_h_i_s', time()); 
    
    if(is_uploaded_file($img_file['tmp_name']))
    {
        move_uploaded_file($img_file['tmp_name'], 'C:\Apache24\htdocs\img\images' . $DateAndTime. '.jpg' );
    }
    
    $img_name = $_FILES["img_name"]['name'] . $DateAndTime;
    $param = [
        "title" => $title,
        "ctnt" => $ctnt,
        "i_user" => $i_user,
        "img_name" => $img_name
    ];

    ins_board($param);
    header("location: list.php");