<?php
    // Menampilkan teks "Hello World" pada browser
    echo "Hello World";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>My First PHP File</h1>
    <?php
        // Menampilkan teks "Hello World" pada browser
        echo "Hello World <br>";
        echo "Hello <b>World</b>";
        echo "<p>Hava a nice day</p>";

        // Inisisasi variabel dan menampilkan nilainya
        $nama = "John Wick";
        $alamat = "Jakarta";
        $umur = 30;
        echo "Nama saya adalah ".$nama." beralamat di ".$alamat;
        echo "<br>";
        
        // Inisisasi variabel dan menampilkan nilainya
        $txt = "Hello World";
        $x = 5;
        $y = 10.5;
        echo $txt;
        echo "<br>";
        echo $x;
        echo "<br>";
        echo $y;
        echo "<br>";
        echo $x + $y;
        echo "<hr>";
        $text = "ESQ Business School";
        echo "$nama sekolah di $text";

        echo "<hr>";
        echo "<h2>Menampilkan Teks</h2>";

        print "Hello World!";
        $x = null;
        var_dump($x);

        echo "<hr>";
        echo "<h2>Operator Aritmatika</h2>";
        $nilai1 = 10;
        $nilai2 = 20;

        echo "Hasil 10 + 20 = ";
        echo $nilai1 + $nilai2;

        
    ?>

    
    
</body>
</html>
