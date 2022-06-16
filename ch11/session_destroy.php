<?php
    session_start();
    // session_destroy();
    session_unset();
    echo $_SESSION['var1'], "<br>";
    echo $_SESSION['var2'], "<br>";

    // unset : 바로 죽임
    // destory : 출력하고 죽임
?>
<a href="confirm.php">확인</a>