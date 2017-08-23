<?php
    require './vendor/autoload.php';
    use Spipu\Html2Pdf\Html2Pdf;

    $html2pdf = new Html2Pdf();
    $html2pdf->writeHTML('<h1>HelloWorld</h1><p>This is my first test</p>');
    $html2pdf->output();