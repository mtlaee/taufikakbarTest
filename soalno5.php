<?php
// Fungsi untuk menampilkan output
function Output($message) {
    echo $message . "<br>";
}

// Deklarasi array untuk menu
$menus = [
    "Makanan" => 3,
    "Minuman" => 3,
    "Parsel" => 3
];

// Menampilkan semua menu
foreach ($menus as $jenis => $jumlah) {
    Output($jenis);
    for ($i = 1; $i <= $jumlah; $i++) {
        Output("$i. Menu $jenis ke $i");
    }
    Output(""); // Baris kosong untuk pemisah antar kategori
}
?>