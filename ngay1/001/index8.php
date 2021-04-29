<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php
    $thanhPho = ["hà nội", "đà nẵng", "hồ chí minh"];
    // in ra cấu trúc mảng hay object
    echo "<pre>";
    print_r($thanhPho);
    echo "</pre>";
    // in ra độ dài của mảng
    echo "<br>" . count($thanhPho);

    $length =  count($thanhPho);

    echo "<ul>";
    for ($i = 0;$i < $length;$i++) {
        echo "<li>";
        echo $thanhPho[$i];
        echo "</li>";
    }
    echo "</ul>";
    ?>

</body>
</html>