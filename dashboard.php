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
if ($mode == 6) {

    echo "-- POLGAN MART (Penjualan Random) --\n\n";

    $jumlah_beli = [];
    $total = [];
    $grandtotal = 0;

    for ($i = 0; $i < count($kode_barang); $i++) {

        $jumlah_beli[$i] = rand(1,5);
        $total[$i] = $jumlah_beli[$i] * $harga_barang[$i];
        $grandtotal += $total[$i];

        echo $nama_barang[$i] . " | Qty: " . $jumlah_beli[$i] .
             " | Total: Rp " . number_format($total[$i], 0, ',', '.') . "\n";
    }

    echo "\nGrand Total: Rp " . number_format($grandtotal, 0, ',', '.');

    exit;
}