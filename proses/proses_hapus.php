<?php
include('../koneksi.php');
session_start();
if ($_POST['namaTabel'] == 'tbl_seleksi') {
    $data = $koneksi->prepare("delete FROM " . $_POST['namaTabel'] . " where kode_seleksi=?")->execute([$_POST['id']]);
    $data = $koneksi->prepare("delete FROM tbl_seleksi_proses where kode_seleksi=?")->execute([$_POST['id']]);
    $data = $koneksi->prepare("delete FROM tbl_hasil where kode_seleksi=?")->execute([$_POST['id']]);
} else {
    $data = $koneksi->prepare("delete FROM " . $_POST['namaTabel'] . " where id=?")->execute([$_POST['id']]);
}
