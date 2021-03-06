<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/fonts.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amistad Prensa Digital</title>
</head>
<body onload="timerPic2()">
<div id="contenido-principal">
    <?php
    include_once("../content/share_content.php");
    include_once("../content/social_buttons.php");
    include_once("../content/header.php");
    ?>
    <section id="main">
        <?php
        require_once("../controller/news_controller.php");
        $newsController = new NewsController();
        $newsController->mostrarTodasLasNoticias();
        ?>
    </section>
    <?php
    include_once("../Amistad/content/footer.php");
    ?>
</div>
<script src="../js/comentarios.js"></script>
<script src="../js/menu.js"></script>
<script src="../js/adds.js"></script>
</body>
</html>
