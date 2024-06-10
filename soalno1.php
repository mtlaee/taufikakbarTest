<?php
// Fungsi untuk menampilkan output
function Output($message) {
    echo $message . "<br>";
}

// Harga satu bolpoin
$harga_satuan = 1750;

// Jumlah bolpoin dalam satu lusin
$jumlah_lusin = 12;

// Total uang yang dibayarkan oleh Rian
$uang_dibayarkan = 5 * 5000;

// Menghitung total harga 1 lusin bolpoin
$total_harga = $harga_satuan * $jumlah_lusin;
Output("Total harga 1 lusin bolpoin: Rp $total_harga");

// Menghitung uang kembalian
$uang_kembalian = $uang_dibayarkan - $total_harga;
Output("Uang dibayarkan: Rp $uang_dibayarkan");
Output("Uang kembalian: Rp $uang_kembalian");

?>