<?php
    define("URL", "localhost");
    define("USERNAME", "root");
    define("PASSWORD", "506greendg@");
    define("DB_NAME", "board1");
    
    function get_conn() 
    { 
        return mysqli_connect(URL, USERNAME, PASSWORD, DB_NAME);
    }

    // 상수일 때 변수명 대문자~!!~!
?>