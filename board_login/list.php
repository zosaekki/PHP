<?php
    include_once "db/db_board.php";
    session_start();

    if(isset($_SESSION["login_user"]))
    {
        $login_user = $_SESSION["login_user"];
        $nm = $login_user["nm"];
        $welcome = "${nm}님 환영합니다.";
        $log = "<a href='logout.php'><button>로그아웃</button></a>";
        if($login_user["role"] == 'admin')
        {
            $write = "<a href='write.php'><button>글쓰기</button></a>";
        }
    }
    else
    {
        $log = "<a href='login.php'><button>로그인</button></a>";
    }
    $list = sel_board_list();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>리스트</title>
</head>
<body>
    <header>
        <div><?=$welcome?></div>
        <div>
            <?=$write?>
            <?=$log?>
        </div>
    </header>
    <main>
        <h1>리스트</h1>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>제목</th>
                    <th>작성자</th>
                    <th>작성일시</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($list as $item) { ?>
                    <tr>
                        <td><?=$item["i_board"]?></td>
                        <td><a href="detail.php?i_board=<?=$item["i_board"]?>"><?=$item["title"]?></a></td>
                        <td><?=$item["nm"]?></td>
                        <td><?=$item["created_at"]?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>
</body>
</html>