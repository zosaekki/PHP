<?php
    include_once 'db.php';

    $title = $_POST['title'];
    $ctnt = $_POST['ctnt'];
    $username = $_POST['username'];
    $board = $_POST['board'];
    
    $sql = 
    "
        INSERT INTO $board
        (title, ctnt, username)
        VALUES
        ('$title', '$ctnt', '$username')
    ";

    $conn = get_conn();
    mysqli_query($conn, $sql);
    mysqli_close($conn);

    
    if($board == 't2_board1')
    {
        $list = "";
    }
    else
    {
        $list = '2';
    }

    header("location: list$list.php");
?>