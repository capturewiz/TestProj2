<!DOCTYPE html>
<html>
<head>
    <title>MyTitle</title>
</head>
<body>

<div>
    <?php
        include_once('s2.php');

        $a = 3;

        $b=5;

        for ($x=0; $x<=$a; $x++)
        {
            $b = 4;

            echo $a , "," , $x , " <br>";
        };

        f2($a . "," . $b . ' <br>');
    ?>
</div>

</body>
</html>