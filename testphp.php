<!DOCTYPE html>
<html>
<head>
    <title>MyTitle</title>
</head>
<body>

<div>

    <?php
        for ($x=0; $x<=10; $x++)
        {
            echo "The number is: $x <br>";
        }
    ?>
</div>

<script>
    //change a style
    document.body.style.backgroundColor="#d0f0f0";

    a='a'

    //write text to body
    document.body.firstChild.textContent = "Hello World ";
    for (var x=0; x<10; x++){
        document.body.firstChild.textContent += x + ', ';
    };

    a+= 'b'

</script>

</body>
</html>