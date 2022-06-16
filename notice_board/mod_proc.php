<?php
    include_once 'db_info.php';

    $id = $_POST['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];

    $sql = 
    "
        UPDATE board
        SET
        title = '$title',
        content = '$content',
        mod_at = now()
        WHERE id = $id
    ";

    $conn = get_conn();
    mysqli_query($conn, $sql);
    mysqli_close($conn);

    header("location: detail.php?id=$id");
?>