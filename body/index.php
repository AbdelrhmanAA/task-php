<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $age = 18;

        if(is_integer ($age) === true && $age > 18)
        {
            echo 'your request is approved';
        } else {
            echo 'your request is dis-approved';
        }


        ?>
</body>
</html>