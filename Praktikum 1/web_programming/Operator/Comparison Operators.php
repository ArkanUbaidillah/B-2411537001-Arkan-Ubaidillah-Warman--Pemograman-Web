<!DOCTYPE html>
<html>

<head>
    <title>Praktikum Web Programming</title>
</head>

<body>
    <h1>Hello World!</h1>
    <?php
    echo "<p>Ini adalah script PHP pertama saya</p>";

    $x = 100;
    $y = "100";
    var_dump($y);
    echo ("</br>");

    echo var_dump($x == $y) . "</br>";
    echo (var_dump($x === $y) . "</br>");
    echo (var_dump($x !== $y) . "</br>");

    $y = (int) $y; //parsing string to integer
    var_dump($y);
    echo ("</br>");

    echo (var_dump($x != $y) . "</br>");
    echo (var_dump($x <> $y) . "</br>");
    echo (var_dump($x !== $y) . "</br>");

    echo (var_dump($x > $y) . "</br>");
    echo (var_dump($x < $y) . "</br>");
    echo (var_dump($x >= $y) . "</br>");
    echo (var_dump($x <= $y) . "</br>");
    echo (var_dump($x <=> $y) . "</br>");
    ?>
</body>

</html>
```