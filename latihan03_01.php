<?php
    $usia = 17;
    if($usia < 17) {
        echo "Anda belum dewasa";
    }
    else if ($usia > 17 )
        echo "Anda sudah dewasa";
    else 
        echo "Selamat memasuki usia dewasa";
?>

<hr>

<?php
    $grade = "";

    switch($grade)
    {
        case "A";
            echo "Memuaskan";
            break;
        case "B";
            echo "Cukup";
            break;
        default:
            echo "tidak memuaskan";
        echo "<br>";
    }

?>

<?php
echo "<hr>";
    //Latihan 1
    // Buat toko cat bangunan jaya menjual beragam jenis cat
    // inisisasi variabel harga cat
    echo "<h2>Latihan 1</h2>";
    $cat_mowilex = 20000; echo "Harga cat Mowilex adalah Rp. $cat_mowilex"; 
    echo "<br>";
    $cat_danapaint = 30000; echo "Harga cat Danapaint adalah Rp. ".$cat_danapaint; 
    echo "<br>";
    $cat_catylac = 40000; echo "Harga cat Catylac adalah Rp. ".$cat_catylac; 
    echo "<br>";

    // deskripsi diskon
    echo "Diskon 5% jika jumlah beli lebih dari 5 dan diskon 10% jika jumlah beli lebih dari 10 <br>===========================";
    
    // inisisasi variabel jumlah beli
    echo "<br>";
    $jumlah_beli_cat_mowilex = 6; echo "Jumlah beli cat Mowilex adalah ".$jumlah_beli_cat_mowilex;
    echo "<br>";
    $jumlah_beli_cat_danapaint = 11; echo "Jumlah beli cat Danapaint adalah ".$jumlah_beli_cat_danapaint;
    echo "<br>";
    $jumlah_beli_cat_catylac = 12; echo "Jumlah beli cat Catylac adalah ".$jumlah_beli_cat_catylac;
    echo "<br>";

    // if else kondisi
    if ($jumlah_beli_cat_mowilex > 5 && $jumlah_beli_cat_mowilex < 10) {
        $harga_cat_mowilex = $cat_mowilex * $jumlah_beli_cat_mowilex;
        $diskon_cat_mowilex = $harga_cat_mowilex * 0.05;
        $total_harga_cat_mowilex = $harga_cat_mowilex - $diskon_cat_mowilex;
        echo "Total harga cat Mowilex adalah Rp. ".$total_harga_cat_mowilex;
    }
    else if ($jumlah_beli_cat_mowilex > 10) {
        $harga_cat_mowilex = $cat_mowilex * $jumlah_beli_cat_mowilex;
        $diskon_cat_mowilex = $harga_cat_mowilex * 0.1;
        $total_harga_cat_mowilex = $harga_cat_mowilex - $diskon_cat_mowilex;
        echo "Total harga cat Mowilex adalah Rp. ".$total_harga_cat_mowilex;
    }
    else {
        $harga_cat_mowilex = $cat_mowilex * $jumlah_beli_cat_mowilex;
        echo "Total harga cat Mowilex adalah Rp. ".$harga_cat_mowilex;
    }

    echo "<hr>";

    echo "<h2>Latihan 2</h2>";
    // cetak angka jika angka genap cetak angka ganjil cetak angka genap

    echo "<hr>";

    echo"<h2>Foreach loop</h2>";
    // foreach loop
    $nama = array("Asep", "Budi", "Caca", "Dedi", "Euis");
    foreach ($nama as $key => $value) {
        echo $key."-".$value;
        echo "<br>";
    }

    echo "<hr>";

    echo"<h2>While Statement</h2>";
    // while statement
    // ini adalah contoh penggunaan while statement
    $x = 0;
    while ($x <= 4)
    {
        echo $nama[$x];
        echo "<br>";
        $x++;
    }

    //contoh fungsi dan pemanggilan fungsi
    echo "<hr>";
    echo"<h2>Fungsi</h2>";
    function hitungJumlah($x, $y)
    {
        $z = $x + $y;
        return $z;
    }

    $jumlah = hitungJumlah(5,10);
    echo "Hasil penjumlahan adalah ".$jumlah;
    
    // Latihan 3
    // buat fungsi dengan parameter return value
    echo "<hr>";
    echo"<h2>Latihan 3</h2>";
    // fungsi perkenalan
    $nama = "Rizal";
    // membuat fungsi dengan parameter
    function perkenalan($nama, $salam="Assalamualaikum"){
        echo $salam.", ";
        echo "Perkenalkan nama saya ".$nama;
        echo "<br>";
    }
    // pemanggilan fungsi perkenalan2
    perkenalan($nama);
    echo "<hr>";


    ?>


    

    

    
    
    





