<?php
require '../vendor/autoload.php';


$inputFileNama = '../excel/Data Karyawan.xlsx';
$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileNama);

$spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
var_dump($spreadsheet->getSheetByName('Sheet1'));
