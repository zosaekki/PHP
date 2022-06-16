<?php
    include_once "db/db_board.php";
    session_start();

    $welcome = "";
    $write = "";
    $log = "";

    if(isset($_SESSION["login_user"]))
    {
        $login_user = $_SESSION["login_user"];
        $nm = $login_user["nm"];
        $welcome = "${nm}님 환영합니다.";
        $write = "<a href='write.php'><button>글쓰기</button></a>";
        $log = "<a href='logout.php'><button>로그아웃</button></a>";
    }
    else
    {
        $log = "<a href='login.php'><button>로그인</button></a>";
    }


    // 페이징
    $page = 1;
    
    if(isset($_GET['page']))
    {
        $page = intval($_GET['page']);
    }
    
    // 검색
    $search_txt = "";
    if(isset($_GET['search_txt']) && $_GET['search_txt'] !== "")
    {
        $search_txt = $_GET['search_txt'];
    }
    else if(isset($_GET['search_txt']) && $_GET['search_txt'] == "")
    {
        header("location: list.php?page=$page");
    }
    $row_count = 10;
    $param = [
        "s_idx" => ($page - 1) * $row_count,
        "row_count" => $row_count,
        "search_txt" => $search_txt
    ];

    $paging_count = sel_paging_count($param);
    $list = sel_board_list($param);

    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="common.css">
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
        <div>
            <form action="list.php" method="GET">
                <div>
                    <input type="search" name="search_txt" value="<?=$search_txt?>">
                    <input type="submit" value="검색">
                </div>
            </form>
        </div>
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
                <?php foreach($list as $item) {
                    $result = str_replace($search_txt,"<mark>" . $search_txt . "</mark>", $item['title']); ?>
                    <tr>
                        <td><?=$item["i_board"]?></td>
                        <td><a href="detail.php?i_board=<?=$item["i_board"]?>&page=<?=$page?>&search_txt=<?=$search_txt?>"><?=isset($_GET['search_txt']) ? $result : $item['title']?></a></td>
                        <td><?=$item["nm"]?></td>
                        <td><?=$item["created_at"]?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <div>
            <?php for($i=1; $i<=$paging_count; $i++) { ?>
                <span><a class="<?=$i==$page ? "selected_page" : ""?>" href="list.php?page=<?=$i?>&search_txt=<?=$search_txt?>"><?=$i?></a></span>
            <?php } ?>
        </div>
    </main>
</body>
</html>