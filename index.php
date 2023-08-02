<?php

// Fungsi untuk menghitung luas lingkaran
function luasLingkaran($r) {
    return round(3.14 * $r * $r, 2);
}

// Fungsi untuk menghitung keliling lingkaran
function kelilingLingkaran($r) {
    return round(2 * 3.14 * $r, 2);
}

// Fungsi untuk menghitung luas persegi
function luasPersegi($panjang, $lebar) {
    return round($panjang * $lebar, 2);
}

// Fungsi untuk mencetak angka dan memanggil fungsi sesuai kondisi
function cetakAngkaDanFungsi($num) {
    echo round($num, 2) . "\n";
    if ($num % 3 === 0 && $num % 5 === 0) {
        $luasPersegi = luasPersegi($num / 3, $num / 5);
        echo round($luasPersegi, 2) . "\n";
    } elseif ($num % 3 === 0) {
        $luasLingkaran = luasLingkaran($num / 3);
        echo round($luasLingkaran, 2) . "\n";
    } elseif ($num % 5 === 0) {
        $kelilingLingkaran = kelilingLingkaran($num / 5);
        echo round($kelilingLingkaran, 2) . "\n";
    }
}

// Cetak angka dari 1 hingga 100 dengan memanggil fungsi sesuai kondisi
for ($i = 1; $i <= 100; $i++) {
    cetakAngkaDanFungsi($i);
}

?>
