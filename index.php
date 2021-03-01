<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Letovo forest</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php
    require_once 'navbar.html';
?>
<div class="container">
    <div class="row">
        <div class="col-md-12 centered">
            <img src="images/mainpic2.jpg" class="change" usemap="#map" style="max-width: 63%;
    max-height: 63%;">
            <map name="map">
                <area shape="rect" coords="354,406, 388,466" alt="Березовая поляна1" href="ber.php">
                <area shape="rect" coords="131,239, 165,299" alt="Березовая поляна2" href="ber.php">

                <area shape="rect" coords="307,237, 341,297" alt="Дубовая поляна1" href="dub.php">
                <area shape="rect" coords="225,446, 259,506" alt="Дубовая поляна2" href="dub.php">

                <area shape="rect" coords="534,269, 568,329" alt="Кленовая поляна1" href="klen.php">
                <area shape="rect" coords="420,386, 454,446" alt="Кленовая поляна2" href="klen.php">
                <area shape="rect" coords="179,75, 213,135" alt="Кленовая поляна3" href="klen.php">

                <area shape="rect" coords="273,250, 307,310" alt="Липовая поляна1" href="lipa.php">
                <area shape="rect" coords="187,476, 221,536" alt="Липовая поляна2" href="lipa.php">

                <area shape="rect" coords="324,105, 358,165" alt="Сосновая поляна1" href="sosna.php">
                <area shape="rect" coords="242,193, 276,253" alt="Сосновая поляна2" href="sosna.php">
                <area shape="rect" coords="170,105, 204,165" alt="Сосновая поляна3" href="sosna.php">

                <area shape="rect" coords="225,45, 259,105" alt="Ивовая поляна1" href="iva.php">
                <area shape="rect" coords="341,33, 375,93" alt="Ивовая поляна2" href="iva.php">
                <area shape="rect" coords="540,40, 574,100" alt="Ивовая поляна3" href="iva.php">

                <area shape="rect" coords="114,15, 148,75" alt="Ольховая поляна1" href="olha.php">
                <area shape="rect" coords="358,50, 392,110" alt="Ольховая поляна2" href="olha.php">
                <area shape="rect" coords="568,40, 602,100" alt="Ольховая поляна3" href="olha.php">
            </map>
            <img src="images/2.png" class="hidden change" style="max-width: 63%; max-height: 63%;">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 centered">
            <div><a class="shine-button">Показать лыжную тропу</a></div>
            <div><a class="shine-button hidden">Показать главную картинку</a></div>
        </div>
    </div>
</div>
<?php
    require_once 'footer.html';
?>
</body>
<script src="js/script.js"></script>
</html>