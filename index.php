<?php
    require './vendor/autoload.php';
    use Spipu\Html2Pdf\Html2Pdf;

    if (isset($_POST['create'])){
        ob_start();
        require_once 'print_view.php';
        $html = ob_get_clean();

        $html2pdf = new Html2Pdf('P','A4','en','true','UTF-8');
        $html2pdf->writeHTML($html);
        $html2pdf->output('generated_document.pdf');
    }
?>

<form action="" method="post" style="text-align: center">
    <img src="https://www.html2pdf.fr/img/_langue/en/logo.gif" alt="HTML2pdf" style="margin-bottom: 10px;"/><br>
    <input type="text" placeholder="Title" name="title">
    <input type="submit" value="Create PDF" name="create"/>
</form>
