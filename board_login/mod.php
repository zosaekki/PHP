<?php
    include_once "db/db_board.php";
    
    $i_board = $_GET["i_board"];

    $param = [
        "i_board" => $i_board
    ];
    session_start();
    if($_SESSION["login_user"]['role'] !== 'admin')
    {
        header("location: list.php");
    }
    $item = sel_board($param);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>글수정</title>
</head>
<body>
    <h1>글수정</h1>
    <form action="mod_proc.php" method="post">
        <div><input type="hidden" name="i_board" value="<?=$i_board?>"></div>
        <div><input type="text" name="title" placeholder="제목" value="<?=$item["title"]?>"></div>
        <div><textarea name="ctnt" placeholder="내용"><?=$item["ctnt"]?></textarea></div>
        <div>
            <input type="submit" value="수정">
            <input type="reset" value="취소">
        </div>
    </form>
</body>
</html>