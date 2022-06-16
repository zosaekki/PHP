<?php
include_once "db.php";
function ins_user(&$param) {
    $email = $param["email"];
    $pw = $param["pw"];
    $nm = $param["nm"];

    $conn = get_conn();
    $sql = 
    "INSERT INTO cafe_host (email, pw, nm) VALUES 
    ('$email', '$pw', '$nm')";        
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    
    return $result;
 }

 function sel_user(&$param) {
    $nm = $param["nm"];
    $sql = 
    "   SELECT u_num, pw, nm
        FROM cafe_host
        WHERE nm = '$nm'
    ";
    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return mysqli_fetch_assoc($result);
 }
 