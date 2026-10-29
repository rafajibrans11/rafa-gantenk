<!DOCTYPE html>
<html lang="en">

<head>
    <title>Praktikum 1</title>
</head>

<body>

    <h1>HALO</h1>
    <h2>Saya RAFA JIBRAN SAPUTRA</h2>
    <h2>2125600098</h2>
    <h2>2 D4 ELKA D</h2>

    <h1 style="background-color: yellow;">
        <font color="#11ffff">
            HELLO WORD
        </font>
    </h1>

    <?php


    date_default_timezone_set('Asia/Jakarta');

    echo "<p>";
    echo "time is ";
    echo date("Y/m/d H:i:s");
    echo "</p>";



    echo "<p>";

    for ($i = 1; $i <= 100; $i++) {
        echo "$i ";
    }

    echo "</p>";

    echo "<p>";

    $angka = 1;
    $x = 1;
    while ($angka < 100) {
        echo $angka . " ";

        $angka += $x;
        $x += 1;
    }

    echo "</p>";

    echo "<p>";

    $angkaa = 1;
    while ($angkaa ** 2 < 100) {
        echo ($angkaa ** 2) . " ";

        $angkaa += 1;
    }
    echo "</p>";
    ?>
</body>

</html>