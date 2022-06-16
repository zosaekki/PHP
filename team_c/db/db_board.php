<?php
    include_once "db.php";

    function ins_board(&$param)
    {
        $title = $param["title"];
        $ctnt = $param["ctnt"];
        $i_user = $param["i_user"];
        $img_name = $param["img_name"];

        $sql =
        "   INSERT INTO t_board
            (i_user, title, ctnt, img_name)
            VALUES
            ('$i_user', '$title', '$ctnt', '$img_name')
        ";

        $conn = get_conn();
        mysqli_query($conn, $sql);
        mysqli_close($conn);
    }

    function sel_board_list()
    {
        $sql =
        "   SELECT A.title, A.img_name
            FROM t_board A
            INNER JOIN t_user B
            ON A.i_user = B.i_user
        ";

        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }