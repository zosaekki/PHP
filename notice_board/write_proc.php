<?php
    include_once 'db_info.php';

    $username = $_POST['username'];
    $title = $_POST['title'];
    $content = $_POST['content'];

    $sql = 
    "
        INSERT INTO board
        (username, title, content)
        VALUES
        ('$username', '$title', '$content')
    ";

    $conn = get_conn();
    mysqli_query($conn, $sql);
    mysqli_close($conn);

    header("location: list.php");
?>