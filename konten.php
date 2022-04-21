<?php
@$page = $_GET['page'];
@$aksi = $_GET['actions'];
@$folder = $_GET['folder'];
//seleksi page atau halaman yang dipilih oleh pengguna
//Menggunakan IF

if (empty($page)) {
    require 'dashboard.php';
} else {
    $file = "views/" . $folder . "/" . $page . "_" . $aksi . ".php";
    if (file_exists($file)) {
        require "views/" . $folder . "/" . $page . "_" . $aksi . ".php";
    } else {
        require "views/404.php";
    }
}
