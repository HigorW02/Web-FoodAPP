<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/views/css/index.css">
    <link rel="stylesheet" href="./src/views/css/cabecalho.css">
    <link rel="stylesheet" href="./src/views/css/menu.css">
    <link rel="shortcut icon" href="src/views/img/logoAtlasFood.jpeg" type="image/x-icon">
    <title>AtlasFood-Inicio</title>
</head>

<body>
    <!-- Chamando o código do Cabeçaho da página! -->
    <?php
        require("./src/views/templates/cabecalho.html");
    ?>

    <!-- Chamando o código do Menu Lateral -->
    <?php
        require_once("./src/views/templates/menu.html");
    ?>
    
    <main class="corpo">
        <div class="content">
            <div class="slides">
                <input type="radio" name="slide" id="slide1" checked>
                <input type="radio" name="slide" id="slide2">
                <input type="radio" name="slide" id="slide3">
                <input type="radio" name="slide" id="slide4">
                <input type="radio" name="slide" id="slide5">

                <div class="slide s1">
                    <img src="src/views/img/comida3.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="src/views/img/carrocel1.webp" alt="">
                </div>
                <div class="slide">
                    <img src="src/views/img/comida5.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="src/views/img/carrocel5.webp" alt="">
                </div>
                <div class="slide">
                    <img src="src/views/img/comida6.jpg" alt="">
                </div>
            </div>

            <div class="carrossel">
                <label class="bar" for="slide1"></label>
                <label class="bar" for="slide2"></label>
                <label class="bar" for="slide3"></label>
                <label class="bar" for="slide4"></label>
                <label class="bar" for="slide5"></label>
            </div>      
        </div>

    </main>

    <script  type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script> 
    <script  nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="./src/views/js/index.js" defer></script>
</body>

</html>