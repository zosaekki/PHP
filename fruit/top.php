<a href="product_list.php">상점보기</a>
<a href="cart.php">장바구니</a>
<?php
    session_start();

    if(isset($_SESSION["loginUser"])) { // 로그인을 했다면
        $loginUser = $_SESSION["loginUser"];

        if($loginUser[0] == "admin") { // 관리자인 경우
            echo "
                <a href='add_goods.php'>상품입력</a>
                <a href='admin_buy.php'>구매관리</a>
                <a href='admin_mem_list.php'>회원리스트</a>
                <a href='admin_mem_update.php'>회원정보수정</a>
            ";
        } else { // 일반 회원인 경우
            echo "
                <a href='my_buy.php'>구매관리</a>
                <a href='update_member.php'>내정보수정</a>
            ";
        }
    }