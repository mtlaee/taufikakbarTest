<?php
// Fungsi untuk menampilkan output
function Output($message) {
    echo $message . "<br>";
}

// Diketahui
$biaya_toko_1 = 10000;
$biaya_toko_68 = 30100;

// Menghitung kenaikan biaya per toko
$kenaikan_biaya_per_toko = ($biaya_toko_68 - $biaya_toko_1) / (68 - 1);
Output("Kenaikan biaya per toko: Rp $kenaikan_biaya_per_toko");

// Menghitung biaya pengeluaran untuk toko kelontong ke-81
$toko_ke = 81;
$biaya_toko_81 = $biaya_toko_1 + ($kenaikan_biaya_per_toko * ($toko_ke - 1));
Output("Biaya pengeluaran untuk toko kelontong ke-$toko_ke: Rp $biaya_toko_81");

?>