<?php
    include_once 'db.php';

    $i_board = $_GET['i_board'];
    $board_num = $_GET['board_num'];
    if($board_num == 1)
    {
        $t_board = 't2_board1';
        $list = '';
    }
    else
    {
        $t_board = 't2_board2';
        $list = 2;
    }

    $sql = "DELETE FROM $t_board WHERE i_board = $i_board AND board_num = $board_num";

    $conn = get_conn();
    mysqli_query($conn, $sql);
    mysqli_close($conn);

    header("location: list$list.php");
?>