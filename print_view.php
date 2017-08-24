<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print View for html2pdf</title>
</head>
<body>
<?php
    if (isset($_POST['title'])):?>
        <h1><?=$_POST['title']?></h1>
<?php endif; ?>

    <h2>More information</h2>
    <p>This is my first test</p>
</body>
</html>