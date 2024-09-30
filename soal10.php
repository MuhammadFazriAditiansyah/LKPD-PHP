<?php
function hitungUsia($usiaArray) {
    $jumlahAnak = 0;
    $jumlahDewasa = 0;
    
    foreach ($usiaArray as $usia) {
        if ($usia < 17) {
            $jumlahAnak++;
        } else {
            $jumlahDewasa++;
        }
    }
    
    return [
        "jumlahAnak" => $jumlahAnak,
        "jumlahDewasa" => $jumlahDewasa
    ];
}

    $usiaArray = [12, 15, 17, 20, 25, 30, 35, 40, 45,50];

    $hasil = hitungUsia($usiaArray);

    echo "Jumlah anak-anak (di bawah 17 tahun): " . $hasil['jumlahAnak'] . "\n";
    echo "Jumlah dewasa (17 tahun ke atas): " . $hasil['jumlahDewasa'] . "\n";
    ?>