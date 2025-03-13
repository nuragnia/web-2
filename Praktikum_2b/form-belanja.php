<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
</head>
<body>
    <form method="post" action="total_belanja.php">
        <label for="customer">Nama Pelanggan:</label><br>
        <input type="text" name="customer" id="customer"><br><br>

        <label>Produk:</label><br>
        <input type="radio" name="produk" id="buku" value="Buku">
            <label for="buku">Buku</label><br>>
        <input type="radio" name="produk" id="pakaian" value="Pakaian">
            <label for="pakaian">Pakaian</label><br>
        <input type="radio" name="produk" id="elektronik" value="Elektronik">
            <label for="elektronik">Elektronik</label><br>
        <input type="radio" name="produk" id="makanan" value="Makanan">
        <label for="makanan">Makanan</label><br><br>

        <label for="jumlah">Jumlah:</label><br>
        <input type="number" name="jumlah" id="jumlah"><br><br>

        <input type="submit" name="proses" value="Proses">
    </form>
</body>
</html>