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
    // biến là gì ?
    // biến là "thứ" để lưu trữ giá trị
    // giá trị có thể thay đổi trong suốt quá trình chạy
    // biến trong php phải bắt đầu bằng $
    // tên biến chỉ sử dụng chữ cái và chữ số
    // tên biến trong php phải bắt đầu bằng chữ cái

    $a = 2;
    $b = 1;
    $c = $a + $b;
    // nối chuỗi php dùng .
    echo "<br> tổng " . $c;
    echo "<br> hiệu " . ($a - $b);
    echo "<br> tích " . ($a * $b);
    echo "<br> thương " . ( $a/$b );
    echo "<br> phép chia lấy dư " . ($a%$b);
    ?>

    <script>
        var a,b;
        a = 5;
        b = 1;
        console.log(a);
        console.log(b);
        c = a + b;
        console.log("tổng " + c);
    </script>
</body>
</html>