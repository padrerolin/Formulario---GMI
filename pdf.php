<?php
require_once __DIR__. "/vendor/autoload.php";
use mPDF;

$mpdf = new mPDF();
$mpdf ->WriteHTML('<h1>Hello world!<h1>');
$mpdf ->Output();
    

?>

