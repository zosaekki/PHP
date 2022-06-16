<?php
    include_once "db/db_board.php";
    session_start();

    if(isset($_SESSION["login_user"]))
    {
        $login_user = $_SESSION["login_user"];
        $nm = $login_user["nm"];
        $welcome = "${nm}님 환영합니다.";
    }

    $list = sel_board_list();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list</title>
</head>
<body>
    <ul class="header1">
        <li><a href="main.php"><h1>MAIN</h1></a></li>
        <li><a href=""><h3>TITLE1</h3></a></li>
        <li><a href=""><h3>TITLE2</h3></a></li>
        <li><a href=""><h3>TITLE3</h3></a></li>
    </ul>
    <div>
        <h4><?=$welcome?></h4>
        <a href="write.php"><button>글쓰기</button></a>
    </div>
    <table>
        <?php foreach($list as $item) { ?>
            <tr>
                <td><?=$item["title"]?></td>
                <td><?=$item["img_name". "C:\Apache24\htdocs\img\images' . $DateAndTime. '.jpg'"]?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>