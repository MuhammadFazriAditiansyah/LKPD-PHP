<?php
for ($i = 1; $i <= 11; $i++)     {

    $hasil = $i * 5;
     
    if (strpos((string)$hasil, '0') === false) {
        echo "$i x 5 ={$hasil} <br>";
      }
    
    if ($hasil >= 55){
        break;
    }
}
?>