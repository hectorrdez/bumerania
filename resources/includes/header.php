<header>
    <div class="logo">
        <a href="#"><img src="../resources/img/logo-blanco-cortado.png" alt="Bumerania logo" class="logo"></a>
    </div>
    <nav>
        <a href="#" <?php if (isset($pageSelected) && $pageSelected == 'index') echo 'class=pageSelected' ?>>INICIO</a>
        <div class="category" <?php if (isset($pageSelected) && $pageSelected == 'solutions') echo 'style="color:grey"' ?>>SOLUCIONES
            <img class="symbol" src="../resources/icons/caret-down-solid.svg">
            <ul class="categoryContent products">
                <li class="product">
                    <a class="productName" href="./bumibot">BumiBot</a>
                </li>
                <li class="product">
                    <a class="productName" href="./bumibot">Temi</a>
                </li>
                <li class="product">
                    <a class="productName" href="./bumibot">SmartTable</a>
                </li>
                <li class="product">
                    <a class="productName" href="./bumibot">Ares</a>
                </li>
            </ul>
            <div class="productContent"><img class='productContentIMG' src=''></div>
        </div>
        <div class="category" <?php if (isset($pageSelected) && $pageSelected == 'about us') echo 'style="color:grey"' ?>>NOSOTROS
            <img class="symbol" src="../resources/icons/caret-down-solid.svg">
            <ul class="categoryContent us">
                <li class="linkUs">
                    <a href="<?php if (!isset($basePath)) echo './about-us';
                                else echo $basePath . 'about-us' ?>">

                        <img src="../resources/icons/about-us.png">
                        Quienes Somos
                    </a>
                </li>
                <li class="linkUs"><a href="<?php if (!isset($basePath)) echo './about-us';
                                            else echo $basePath . 'about-us' ?>">

                        <img src="../resources/icons/about-us.png">
                        Casos de Éxito
                    </a>
                </li>
                <li class="linkUs"><a href="<?php if (!isset($basePath)) echo './about-us';
                                            else echo $basePath . 'about-us' ?>">

                        <img src="../resources/icons/about-us.png">
                        Solidaridad
                    </a>
                </li>
                <li class="linkUs"><a href="<?php if (!isset($basePath)) echo './about-us';
                                            else echo $basePath . 'about-us' ?>">

                        <img src="../resources/icons/about-us.png">
                        Trabaja con Nosotros
                    </a>
                </li>
            </ul>
        </div>
        <a href="#" <?php if (isset($pageSelected) && $pageSelected == 'press') echo 'class=pageSelected' ?>>SALA DE PRENSA</a>
        <a href="#" <?php if (isset($pageSelected) && $pageSelected == 'contact') echo 'class=pageSelected' ?>>CONTACTO</a>
        <a href="#" <?php if (isset($pageSelected) && $pageSelected == 'blog') echo 'class=pageSelected' ?>>BLOG</a>
        <a href="#" <?php if (isset($pageSelected) && $pageSelected == 'distributor') echo 'class=pageSelected' ?>>DISTRIBUIDOR<span>únete<img src="../resources/icons/caret-down-solid.svg"></span></a>
        <a href="#" <?php if (isset($pageSelected) && $pageSelected == 'support') echo 'class=pageSelected' ?>>SOPORTE 24/7</a>
    </nav>
    <a href="#"><img src="../resources/icons/earth-africa-solid.svg" class="languageBtn"></a>
</header>
<script src="<?php if (!isset($basePath)) echo './resources/code/header.js';
                else echo $basePath . 'resources/code/header.js' ?>"></script>