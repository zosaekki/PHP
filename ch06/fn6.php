<?php
    $star = rand(3, 10);

    // print " star : $star <br>";
    // print_star($star);

    // print_star_line($star);

    print_star_triangle($star);

    // $star = 3
    // *
    // **
    // ***

    /*
    function print_star($star)
    {
        for($i=0; $i<$star; $i++)
        {
            print "*";
        }
    }
    */
    

    /*
    function print_star_line($star)
    {
        for($i=0; $i<$star; $i++)
        {
            for($j=0; $j<$star; $j++)
            {
                print "*";
            }
            print "<br>";
        }
    }
    */

    /*
    function print_star_line($star)
    {
        for($i=0; $i<$star; $i++)
        {
            print_star($star);
            print "<br>";
        }
    }
    */

    function print_star_triangle($star)
    {
        for($i=0; $i<$star; $i++)
        {
            for($z=0; $z<=$i; $z++)
            {
                print "*";
            }
            print "<br>";
        }
    }
?>