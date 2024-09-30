<?php
 function cekAngka($teks) {
    
    preg_match_all('/\d/', $teks, $menyimpanAngka);
 
    if (count($menyimpanAngka[0]) > 0) {
        $angka = implode(",", $menyimpanAngka[0]);
        echo "Teks Mengandung Angka: " . $angka;
    } else {
        echo"Teks Tidak Mengandung Angka";
    }
}

    $teks1 = "Selamat ulang tahun yang ke-13";
    $teks2 = "Selamat ulang tahun Ya!";
    
    cekAngka($teks1);
    echo "<br>";
    echo "<br>";
    cekAngka($teks2);

?>