<form action="proses.php" method="post">

    <div>
        <label for="">Nama barang</label><br>
        <input type="text" name="nama_barang">
    </div>
    <div>
        <label for="">Qty</label><br>
        <input type="number" name="qty">
    </div>
    <div>
        <label for="">Harga</label><br>
        <input type="number" name="harga">
    </div>
    <div>
        <label for="">Kategori</label><br>
        <select name="kategori" id="">
            <option value="Makanan">Makanan</option>
            <option value="Minuman">Minuman</option>
        </select>
    </div>

    <br><br>
    <button type="submit">Submit</button>

</form>