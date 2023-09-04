<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\XLsx;

$spreadsheet = new Spreadsheet();
$activeWorksheet = $spreadsheet->getActiveSheet();
$activeWorksheet->setCellValue('A1','Hello World !');
$activeWorksheet->setCellValue('A2','Hello World !');
$activeWorksheet->setCellValue('B1','Hello World !');

$writer = new XLsx($spreadsheet);
$writer->save('hello world.xlsx');

?>