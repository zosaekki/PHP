<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table { border-collapse : collapse; }
        table, td { border: 1px solid #000; }
    </style>
</head>
<body>
    <table>
    <?php
        $val = rand(3, 10);
        echo "val : $val <br>";
        $num = 1;
        for($i = 0; $i < $val; $i++)
        {
            echo "<tr>";
            for($z=0; $z < $val; $z++)
            {
                echo "<td>" . $num++ . "</td>";
            }
            echo "</tr>";
        }
    ?>
    </table>
    
</body>
</html>
