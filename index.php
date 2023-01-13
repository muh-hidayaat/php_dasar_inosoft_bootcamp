<?php

function kelipatanTiga($angka){
    $r = $angka / 3;
    $luas_lingkaran = 3.14*$r*$r;
    $format_luas_lingkaran = number_format($luas_lingkaran, 2);
    echo "luas lingkaran = $format_luas_lingkaran\n";
}

function kelipatanLima($angka){
    $r = $angka /5;
    $keliling_lingkaran = 3.14*2*$r;
    $format_keliling_lingkaran = number_format($keliling_lingkaran, 2);
    echo "keliling lingkaran = $format_keliling_lingkaran\n";
}

function kelipatanLimaDanTiga($angka){
    $p = $angka/3;
    $l = $angka/5;
    $luas_persegi = $p*$l;
    $format_luas_persegi = number_format($luas_persegi, 2);
    echo "luas persegi = $format_luas_persegi\n";
}

for ($i = 1; $i <= 100; $i++) {
    if ($i%5==0&&$i%3==0){
        echo kelipatanLimaDanTiga($i);
    } elseif ($i%5==0) {
        echo kelipatanLima($i);
    }elseif ($i%3==0) {
        echo kelipatanTiga($i);
    } else {
        echo number_format($i, 2);
        echo "\n";
    }
}

?>