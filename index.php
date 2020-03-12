<?php
require_once 'config/connection.php';

$con = new connectionn();

if (!empty($_POST)) {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $con->query("INSERT INTO menu (nama, harga) VALUES ('{$nama}', $harga)");
}
?>

<form action="" method="post">
    <label for="">Nama</label>
    <input type="text" name="nama" autocomplete="off"><br><br>
    <label for="">Harga</label>
    <input type="number" name="harga" autocomplete="off"><br><br>
    <button type="submit">simpan</button>
</form>