<!DOCTYPE html>
<html>

<head>
    <title>Deret Fibonacci</title>
</head>

<body>
    <h1>Deret Fibonacci</h1>
    <?php
    $n = 10; // jumlah angka yang ditampilkan
    $a = 0;
    $b = 1;

    echo "Deret Fibonacci: <br>";

    // Menggunakan for loop
    for ($i = 1; $i <= $n; $i++) {
        echo $a . "<br>";
        $temp = $a + $b;
        $a = $b;
        $b = $temp;
    }

    echo "<br>";
    echo "==================================================";
    echo "<br>";

    // Menggunakan while loop
    $a = 0;
    $b = 1;
    $i = 1;

    echo "Deret Fibonacci (while): <br>";

    while ($i <= $n) {
        echo $a . "<br>";
        $temp = $a + $b;
        $a = $b;
        $b = $temp;
        $i++;
    }
    ?>
</body>

</html>