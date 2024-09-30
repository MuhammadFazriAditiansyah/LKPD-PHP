<?php

function bandingkanNama($nama1, $nama2) {

    $panjangNama1 = strlen($nama1);
    $panjangNama2 = strlen($nama2);
    
    $selisih = abs($panjangNama1 - $panjangNama2);
    
    if ($panjangNama1 > $panjangNama2) {
        $namaLebihPanjang = $nama1;
    } elseif ($panjangNama2 > $panjangNama1) {
        $namaLebihPanjang = $nama2;
    } else {
        return "Kedua nama memiliki jumlah karakter yang sama: $panjangNama1 karakter.";
    }

    return "<u>$nama1</u> :  $panjangNama1 ," .
           "<u> $nama2</u>: $panjangNama2" .
           "<br><br> $namaLebihPanjang memiliki jumlah karakter lebih banyak, selisih $selisih karakter.";
}

    $nama1 = "Fatih Muda Bangsawan";
    $nama2 = "Fatih Muda Bangsawan";

    echo bandingkanNama($nama1, $nama2);
    ?>