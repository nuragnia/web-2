<?php
// Tangkap data dari form
$nama_pelanggan = $_POST['nama_pelanggan'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];

// LOGIKA MENGHITUNG TOTAL HARGA
$harga_TV= 4200000;
$harga_kulkas = 3100000;
$harga_mesincuci = 3800000;

switch ($produk) {
    case 'TV':
        $total_harga = $harga_TY * $jumlah;
        break;
    case 'Kulkas':
        $total_harga = $harga_kulkas * $jumlah;
        break;
    case 'Mesin Cuci':
        $total_harga = $harga_mesincuci * $jumlah;
        break;
    default:
        $total_harga = 0;
        break;
}

// Mencetak belanjaan
echo "<h2>Ringkasan Belanja</h2>";
echo "<p>Nama Pelanggan: " . $nama_pelanggan . "</p>";
echo "<p>Produk: " . $produk . "</p>";
echo "<p>Jumlah: " . $jumlah . "</p>";
echo "<p>Total Harga: Rp " . number_format($total_harga, 0, ',', '.') . "</p>";
?>