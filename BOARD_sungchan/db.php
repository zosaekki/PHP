<?php

    define("URL","localhost");
    define("USERNAME","root");
    define("PW","506greendg@");
    define("DB","cafe");
    define("PORT", "3306");

    function get_conn(){
        return mysqli_connect(URL, USERNAME, PW, DB, PORT);
    }

?>