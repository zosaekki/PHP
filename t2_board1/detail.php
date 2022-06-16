<?php
    include_once 'db.php';
    
    $i_board = $_GET['i_board'];
    $board_num = $_GET['board_num'];
    if($board_num == 1)
    {
        $t_board = 't2_board1';
        $list = "";
        $board_nm = "게시판1";
    }
    else
    {
        $t_board = 't2_board2';
        $list = "2";
        $board_nm = "게시판2";
    }

    $sql = "SELECT title, ctnt, username, created_at, mod_at
            FROM $t_board
            WHERE i_board = $i_board";
    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);

    if($row = mysqli_fetch_assoc($result))
    {
        $title = $row['title'];
        $ctnt = $row['ctnt'];
        $username = $row['username'];
        $created_at = $row['created_at'];
        $mod_at = $row['mod_at'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
</head>
<body>
    <h1>detail</h1>
    <h3><?=$board_nm?></h3>
    <div>제목 : <?=$title?></div>
    <div>내용 : <?=$ctnt?></div>
    <div>작성자 : <?=$username?></div>
    <div>작성일시 : <?=$created_at?></div>
    <div>수정일시 : <?=$mod_at?></div>
    <a href="list<?=$list?>.php"><button>목록</button></a>
    <a href="mod.php?i_board=<?=$i_board?>&board_num=<?=$board_num?>"><button>수정</button></a>
    <a href="del_proc.php?i_board=<?=$i_board?>&board_num=<?=$board_num?>"><button>삭제</button></a>
</body>
</html>