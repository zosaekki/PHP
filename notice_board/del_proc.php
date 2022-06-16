<?php
    include_once 'db_info.php';

    $id = $_GET['id'];

    $sql = "DELETE FROM board WHERE id = $id";

    $conn = get_conn();
    mysqli_query($conn, $sql);
    mysqli_close($conn);

    header("location: list.php");
?>