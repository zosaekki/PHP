<?php
    include_once "db/db_user.php";
    session_start();

    $join = "";
    $write = "";
    $welcome = "";
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
        $join = "<a href='join.php'><button>회원가입</button></a>";
        $log = "<a href='login.php'><button>로그인</button></a>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAIN</title>
</head>
<body>
    <h1>MAIN</h1>
    <a href="list.php"><h4>list</h4></a>
    <h4><?=$welcome?></h4>
    <div>
        <?=$write?>
        <?=$join?>
        <?=$log?>
    </div>
</body>
</html>