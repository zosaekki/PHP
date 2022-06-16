<?php
    $myFile = fopen("ex_test.txt", "w");
    $filep = file("ex_text.txt");

    foreach($filep as $line) {
        $txt = strtoupper($line);
        fputs($myFile, $txt);
    }

