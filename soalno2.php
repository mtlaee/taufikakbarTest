<?php
// Fungsi untuk menampilkan output
function Output($message) {
    echo $message . "<br>";
}

// Deklarasi variabel untuk jumlah uang Setyo
$uang_sepuluhribuan = 3 * 10000;
$uang_limribuan = 4 * 5000;
$uang_duapuluhribuan = 5 * 20000;

// Menghitung total uang Setyo
$total_uang = $uang_sepuluhribuan + $uang_limribuan + $uang_duapuluhribuan;
Output("Total uang Setyo: Rp $total_uang");

// Harga mainan
$harga_mainan = 55000;
Output("Harga mainan: Rp $harga_mainan");

// Menghitung sisa uang setelah membeli mainan
$sisa_uang = $total_uang - $harga_mainan;
Output("Sisa uang Setyo setelah membeli mainan: Rp $sisa_uang");

?>