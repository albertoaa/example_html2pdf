<?php
    require './vendor/autoload.php';
    use Spipu\Html2Pdf\Html2Pdf;

    $html2pdf = new Html2Pdf('P','A4','es','true','UTF-8');
    $html2pdf->writeHTML('<h1>HelloWorld</h1><h2>Más información</h2><p>This is my first test</p>');
    $html2pdf->output('generated_document.pdf');