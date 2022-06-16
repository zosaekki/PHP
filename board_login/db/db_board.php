<?php
    include_once "db.php";

    function ins_board(&$param)
    {
        $i_user = $param["i_user"];
        $title = $param["title"];
        $ctnt = $param["ctnt"];

        $sql =
        "   INSERT INTO t_board
            (i_user, title, ctnt)
            VALUES
            ('$i_user', '$title', '$ctnt')
        ";

        $conn = get_conn();
        mysqli_query($conn, $sql);
        mysqli_close($conn);
    }

    function sel_board_list()
    {
        $sql =
        "   SELECT A.i_board, A.title, A.created_at, B.nm
            FROM t_board A
            INNER JOIN t_user B
            ON A.i_user = B.i_user
            ORDER BY A.i_board DESC
        ";

        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    function sel_board(&$param)
    {
        $i_board = $param["i_board"];

        $sql =
        "   SELECT A.title, A.created_at, A.updated_at, A.ctnt
            , B.nm, B.i_user, B.role
            FROM t_board A
            INNER JOIN t_user B
            ON A.i_user = B.i_user
            WHERE i_board = $i_board
        ";

        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return mysqli_fetch_assoc($result);
    }

    function upd_board(&$param)
    {
        $i_user = $param["i_user"];
        $i_board = $param["i_board"];
        $title = $param["title"];
        $ctnt = $param["ctnt"];
        

        $sql =
        // "   UPDATE t_board
        //     SET title = '$title',
        //         ctnt = '$ctnt',
        //         updated_at = now()
        //     WHERE i_board = $i_board
        //     AND i_user = $i_user
        //     AND role = 'admin'
        // ";
        "UPDATE (SELECT A.title, A.ctnt, A.updated_at, A.i_board, A.i_user, B.role
        FROM t_board A
        INNER JOIN t_user B
        ON A.i_user = B.i_user)
        SET title = '$title',
            ctnt = '$ctnt',
            updated_at = NOW()
        WHERE i_board = $i_board
        AND i_user = $i_user
        AND role = 'admin'";

        $conn = get_conn();
        mysqli_query($conn, $sql);
        mysqli_close($conn);
    }

    function del_board(&$param)
    {
        $i_user = $param["i_user"];
        $i_board = $param["i_board"];
        
        $sql =
        "   DELETE FROM t_board
            WHERE i_board = $i_board
            AND i_user = $i_user
        ";

        $conn = get_conn();
        mysqli_query($conn, $sql);
        mysqli_close($conn);
    }