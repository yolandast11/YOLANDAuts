<?php
if ($mode == 5) {

    echo "-- POLGAN MART --\n\n";
    echo "Daftar Produk:\n";

    for ($i = 0; $i < count($kode_barang); $i++) {
        echo $kode_barang[$i] . " - " .
             $nama_barang[$i] . " - Rp " .
             number_format($harga_barang[$i], 0, ',', '.') . "\n";
    }

    exit;
}