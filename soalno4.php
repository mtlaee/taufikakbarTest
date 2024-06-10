<?php
// Fungsi untuk menampilkan output
function Output($message) {
    echo $message . "<br>";
}

// Perulangan dari 1 sampai 10
for ($i = 1; $i <= 10; $i++) {
    // Menentukan bilangan genap atau ganjil
    if ($i % 2 == 0) {
        Output("$i. Bilangan Genap");
    } else {
        Output("$i. Bilangan Ganjil");
    }
}
?>