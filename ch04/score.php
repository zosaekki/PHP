<?php
    $score = 80;

    switch($score)
    {
        case 100:
            print "당신의 성적은 A입니다.";
            break;
        
        case 80:
            print "당신의 성적은 B입니다.";
            break;
            
        case 60:
            print "당신의 성적은 C입니다.";
            break;

        case 0:
            print "당신의 성적은 F입니다.";
            break;
        
        default:
            print "default";
            break;
    }
?>