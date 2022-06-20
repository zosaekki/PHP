<?php
    include_once 'db.php';
    
    $i_board = $_GET['i_board'];
    $board_num = $_GET['board_num'];
    if($board_num == 1)
    {
        $t_board = 't2_board1';
        $board_nm = "게시판1";
    }
    else
    {
        $t_board = 't2_board2';
        $board_nm = "게시판2";
    }

    $sql = "SELECT title, ctnt FROM $t_board WHERE i_board = $i_board";

    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);

    if($row = mysqli_fetch_assoc($result))
    {
        $title = $row['title'];
        $ctnt = $row['ctnt'];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>글 수 정</title>
</head>
<body>
    <h1>글 수 정</h1>
    <h3><?=$board_nm?></h3>
    <a href="detail.php"><button>detail</button></a>
    <form action="mod_proc.php" method="post">
        <div><input type="hidden" name="i_board" value="<?=$i_board?>"></div>
        <div><input type="hidden" name="board_num" value="<?=$board_num?>"></div>
        <div><input type="text" name="title" placeholder="제목" value="<?=$title?>"></div>
        <div><textarea name="ctnt" placeholder="내용"><?=$ctnt?></textarea></div>
        <div>
            <input type="submit" value="수정">
            <input type="reset" value="리셋">
        </div>
    </form>
</body>
</html>