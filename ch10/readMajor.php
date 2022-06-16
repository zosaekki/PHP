<?php
    $data = file("./major.txt");
    
    print_r($data);

    print "<hr>";
    
    foreach($data as $line) {
        $div = explode(" ", $line);
        // print $line;
        // print $div[0] . ", " . $div[1] . "<br>";
        print "Name: $div[0], Major: $div[1] <br>";
    }