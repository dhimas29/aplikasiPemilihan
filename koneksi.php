<?php
// $koneksi = mysqli_connect("localhost", "root", "", "rekrut") or die("Tidak bisa terhubungan ke database");
try {
    $user = 'root';
    $pass = '';
    $koneksi = new PDO('mysql:host=localhost;dbname=db_pemilihan', $user, $pass);
} catch (PDOException $e) {
    echo $e->getMessage();
}
