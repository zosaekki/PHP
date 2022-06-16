<?php
    $data = file("./name.txt");
    
    print_r($data);

    print "-----------<br>";
    
    foreach($data as $idx => $name) {
        print $name . "[$idx]" . "<br>";
    }