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
if ($mode == 7) {

    echo "-- Detail Pembelian (Foreach) --\n\n";

    $produk = [
        ["nama" => "Roti", "harga" => 12000, "qty" => 2],
        ["nama" => "Susu", "harga" => 15000, "qty" => 1],
        ["nama" => "Telur", "harga" => 26000, "qty" => 3],
    ];

    $grandtotal = 0;

    foreach ($produk as $p) {
        $total = $p["harga"] * $p["qty"];
        $grandtotal += $total;

        echo $p["nama"] . " | Qty: " . $p["qty"] .
             " | Total: Rp " . number_format($total, 0, ',', '.') . "\n";
    }

    echo "\nGrand Total: Rp " . number_format($grandtotal, 0, ',', '.');

    exit;
}
if ($mode == 8) {

    $grandtotal = 175000; // bisa ubah manual

    echo "Total Belanja: Rp " . number_format($grandtotal, 0, ',', '.');

    exit;
}
if ($mode == 9) {

    $total_belanja = 120000; // bisa kamu ubah

    if ($total_belanja < 50000) {
        $diskon = 0.05;
    } elseif ($total_belanja >= 50000 && $total_belanja <= 100000) {
        $diskon = 0.10;
    } else {
        $diskon = 0.15;
    }

    $potongan = $total_belanja * $diskon;
    $total_akhir = $total_belanja - $potongan;

    echo "Total Belanja: Rp " . number_format($total_belanja, 0, ',', '.') . "\n";
    echo "Diskon: " . ($diskon * 100) . "%\n";
    echo "Potongan: Rp " . number_format($potongan, 0, ',', '.') . "\n";
    echo "Total Akhir: Rp " . number_format($total_akhir, 0, ',', '.');

    exit;
}