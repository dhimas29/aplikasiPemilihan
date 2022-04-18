<?php
include('../koneksi.php');
session_start();

if ($_POST['namaFungsi'] == 'hapus') {
    $data = $koneksi->exec("delete FROM " . $_POST['namaTabel'] . " where id='$_POST[id]'");
} elseif ($_POST['namaFungsi'] == 'tambah') {
    // $component = preg_split("=&", $_POST['formValues']);
    echo "aaa";
} elseif ($_POST['namaFungsi'] == 'edit') {
    # code...
}
echo "asdas";
