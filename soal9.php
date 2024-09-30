<?php
    function hitungPecahanUang($jumlah) {
        $pecahan = [100000,50000, 20000, 10000, 5000,2000, 1000, 500,];
    
        $hasil = [];
    
        foreach ($pecahan as $uang) {
            $jumlahLembar = intval($jumlah / $uang);
           
            if ($jumlahLembar > 0) {
                $hasil[$uang] = $jumlahLembar;
                $jumlah -= $jumlahLembar * $uang;
            }
        }

        return $hasil;
    }
    
    $jumlahUang = 200000;
    $hasilPecahan = hitungPecahanUang($jumlahUang);
    
    echo "Jumlah Uang: Rp " . number_format($jumlahUang, 0, ',', '.') . "<br>";
    echo "Lembar Rupiah: <br><br>";
    foreach ($hasilPecahan as $uang => $jumlahLembar) {
        echo "Rp " . number_format($uang, 0, ',', '.') . " : " . $jumlahLembar . " lembar <br>";
        
    }

?>