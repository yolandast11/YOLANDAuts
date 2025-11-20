<?php

// ===============================
// CEK MODE INPUT (commit yang dipilih)
// ===============================
$mode = isset($argv[1]) ? $argv[1] : null;

if (!$mode) {
    echo "Gunakan: php dashboard.php [5|6|7|8|9]\n";
    exit;
}

// ===============================
// DATA PRODUK (Dipakai Commit 5 & 6)
// ===============================
$kode_barang = ["BRG01", "BRG02", "BRG03", "BRG04", "BRG05"];
$nama_barang = ["Roti", "Susu", "Telur", "Gula", "Minyak"];
$harga_barang = [12000, 15000, 26000, 14000, 22000];

// ===============================
// MODE COMMIT 5
// ===============================
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


// ===============================
// MODE COMMIT 6 – Penjualan Random
// ===============================
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



// ===============================
// MODE COMMIT 7 – Perhitungan Total (Foreach)
// ===============================
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



// ===============================
// MODE COMMIT 8 – Cetak Total Belanja
// ===============================
if ($mode == 8) {

    $grandtotal = 175000; // bisa ubah manual

    echo "Total Belanja: Rp " . number_format($grandtotal, 0, ',', '.');

    exit;
}



// ===============================
// MODE COMMIT 9 – Diskon Belanja
// ===============================
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



// ===============================
// Jika mode tidak ditemukan
// ===============================
echo "Mode tidak valid. Gunakan 5, 6, 7, 8, atau 9.\n";