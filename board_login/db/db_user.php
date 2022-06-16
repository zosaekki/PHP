<?php
    include_once "db.php";

    function ins_user(&$param)
    {
        $nm = $param["nm"];
        $uid = $param["uid"];
        $upw = $param["upw"];
        $gender = $param["gender"];

        $sql =
        "   INSERT INTO t_user
            (nm, uid, upw, gender)
            VALUES
            ('$nm', '$uid', '$upw', $gender)
        ";

        $conn = get_conn();
        mysqli_query($conn, $sql);
        mysqli_close($conn);
    }

    function sel_user(&$param)
    {
        $uid = $param["uid"];

        $sql =
        "   SELECT i_user, nm, uid, upw, gender, role
            FROM t_user
            WHERE uid = '$uid'
        ";

        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return mysqli_fetch_assoc($result);
    }