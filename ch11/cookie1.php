<?php
    setcookie("country", "Korea");
    if(isset($_COOKIE['country']))
    {
        echo "Country : ", $_COOKIE['country'], "<br>";
    }

    // 내 브라우저에 있는 cookie 값 변경할려면 setcookie 해줘야 함

    // 내 브라우저에 있는 cookie 값 지울려면 setcookie("");

    // setcookie 하고 바로 $_COOKIE 사용 불가
?>
<a href="cookie2.php">Next Page</a>