<!-- open terminal and copy paste  ...  php -S localhost:8000 ...   -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    $number = 6;
    for($i =1 ; $i<=10 ; $i++){
        $prod = $number * $i;
        echo "6 x $i = $prod  <br> ";
    }
    ?>
</body>
</html>

