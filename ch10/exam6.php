<?php
    $myfile = fopen("exam6_capital.txt", "w");
    $filep = file("./exam6.txt");

    foreach($filep as $line) {
        $txt = strtoupper("$line");
        fputs($myfile, $txt);
    }

    fclose($myfile);