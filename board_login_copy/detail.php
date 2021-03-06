<?php
    include_once "db/db_board.php";
    session_start();
    if(isset($_SESSION["login_user"]))
    {
        $login_user = $_SESSION["login_user"];
    }

    $i_board = $_GET["i_board"];
    $search_txt = $_GET['search_txt'];
    
    
    $param = [
        "i_board" => $i_board
    ];

    $item = sel_board($param);
    $result = str_replace($search_txt,"<mark>" . $search_txt . "</mark>", $item['title']);

    $page = $_GET['page']; // detail에서 paging list로 가기 위해서 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>detail</title>
</head>
<body>
    <div>
        <?php if(isset($_SESSION["login_user"]) && $login_user["i_user"] === $item["i_user"]) { ?>
            <a href="mod.php?i_board=<?=$i_board?>"><button>수정</button></a>
            <button onclick="isDel();">삭제</button>
        <?php } ?>
    </div>
    <a href="list.php?page=<?=$page?>&search_txt=<?=$search_txt?>"><button>리스트</button></a> <!-- list로 돌아가기 -->
    <div>제목 : <?=isset($_GET['search_txt']) ? $result : $item['title']?></div>
    <div>작성자 : <?=$item["nm"]?></div>
    <div>작성일시 : <?=$item["created_at"]?></div>
    <div>수정일시 : <?=$item["updated_at"]?></div>
    <div>내용 : <?=$item["ctnt"]?></div>
    <hr>
    <form action="reply_proc.php" method="POST">
        <div>댓글</div>
        <div>
            <input type="text" placeholder="댓글내용">
            <input type="submit" value="댓글작성">
        </div>
    </form>
    
    <script>
        function isDel()
        {
            console.log ('isDel 실행 됨!!');
            if(confirm('삭제하시겠습니까?'))
            {
                location.href = "del.php?i_board=<?=$i_board?>";
            }
        }
    </script>
</body>
</html>