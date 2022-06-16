<?php
    /* 만약에 star 값이 2
        **
        **
       만약에 star 값이 4
       ****
       ****
       ****
       ****
       */

      $star = rand(2, 10);
      echo $star . "<br>";

      for($i = 0; $i < $star; $i++ )
      {
          for($j = 0; $j < $star; $j++)
          {
              echo "*";
          }
          echo "<br>";
      }
?>