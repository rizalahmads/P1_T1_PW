<html>
<head>
    <title>Pengolahan Nama Anggota Keluarga Rizal</title>
</head>
<body>
    <h1>Pengolahan Nama Anggota Keluarga Rizal</h1>
    <?php
        $array_nama = array("Rizal", "Andika", "Fauzi", "Maulana", "Hadi");
        foreach ($array_nama as $nama) {
            $jumlah_kata = count(explode(" ", $nama));
            $jumlah_huruf = strlen($nama);
            $kebalikan = strrev($nama);
            $jumlah_konsonan = 0;
            $jumlah_vokal = 0;
            for ($i=0; $i<strlen($nama); $i++) {
                if (preg_match('/[aeiouAEIOU]/', $nama[$i])) {
                    $jumlah_vokal++;
                } else if (preg_match('/[bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ]/', $nama[$i])) {
                    $jumlah_konsonan++;
                }
            }
            echo "<h2>$nama</h2>";
            echo "Jumlah Kata: $jumlah_kata<br>";
            echo "Jumlah Huruf: $jumlah_huruf<br>";
            echo "Kebalikan: $kebalikan<br>";
            echo "Jumlah Konsonan: $jumlah_konsonan<br>";
            echo "Jumlah Vokal: $jumlah_vokal<br>";
            echo "<br>";
        }
    ?>
</body>
</html>
