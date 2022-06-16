<?php
    include_once 'db.php';

    $i_board = $_POST['i_board'];
    $title = $_POST['title'];
    $ctnt = $_POST['ctnt'];
    $board_num = $_POST['board_num'];

    if($board_num == 1)
    {
        $mod_table = 't2_board1';
        $list = '';
    }
    else
    {
        $mod_table = 't2_board2';
        $list = "2";
    }
    $sql = 
    "
        UPDATE $mod_table
        SET
        title = '$title',
        ctnt = '$ctnt',
        mod_at = now()
        WHERE i_board = $i_board AND board_num = $board_num;
    ";

    $conn = get_conn();
    mysqli_query($conn, $sql);
    mysqli_close($conn);

    header("location: detail.php?i_board=$i_board&board_num=$board_num");
?>