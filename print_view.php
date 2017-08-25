<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print View for html2pdf</title>
    <style>
        h1 {
            text-align: center;
            text-transform: uppercase;
        }
        h2 {
            color: blue;
        }
        #boxes {
            width: 100%;
        }
        .box {
            width: 150px;
            height: 150px;
            margin-left: 10px;
            border: 1px solid;
            background: #ccc;
            float: left;
            display: inline;
        }
        .blue {
            color: #fff;
            background: blue;
        }
        .yellow {
            background: yellow;
        }
        .pink {
            background: pink;
        }
        .red {
            color: #fff;
            background: red;
        }
        #table {
            margin-top: 20px;
            width: 100%;
        }
        #header img {
            float: right;
        }
    </style>
</head>
<body>
<?php if (isset($_POST['title'])):?>
    <div id="header">
        <img src="https://www.html2pdf.fr/img/_langue/en/logo.gif" alt="HTML2pdf"/>
        <h1><?=$_POST['title']?></h1>
    </div>
<?php endif;?>

    <h2>More information</h2>
    <p>This is my first test</p>

    <div id="boxes">
        <div class="box blue">Box 1</div>
        <div class="box red">Box 2</div>
        <div class="box yellow">Box 3</div>
        <div class="box pink">Box 4</div>
    </div>

    <table border="1" id="table">
        <tr>
            <td>Some title 1</td>
            <td>Some description 1</td>
        </tr>
        <tr>
            <td>Some title 2</td>
            <td>Some description 2</td>
        </tr>
    </table>
</body>
</html>