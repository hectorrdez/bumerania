<header>
    <div class="logo">
        <a href="#"><img src="../resources/img/logo-blanco-cortado.png" alt="Bumerania logo" class="logo"></a>
    </div>
    <nav>
        <a href="<?php if (!isset($basePath)) echo './';
                    else echo $basePath ?>" <?php if (isset($pageSelected) && $pageSelected == 'index') echo 'class=pageSelected' ?>>INICIO</a>
        <div class="category" <?php if (isset($pageSelected) && ($pageSelected == 'solutions' || $pageSelected == 'bumibot' || $pageSelected == 'temi' || $pageSelected == 'smartTable' || $pageSelected == 'ares')) echo 'style="color:grey"' ?>>SOLUCIONES
            <img class="symbol" src="../resources/icons/caret-down-solid.svg">
            <ul class="categoryContent products">
                <li class="product">
                    <a class="productName" <?php if (isset($pageSelected) && $pageSelected == 'bumibot') echo 'style="color:grey"' ?> href="./bumibot">BumiBot</a>
                </li>
                <li class="product">
                    <a class="productName" <?php if (isset($pageSelected) && $pageSelected == 'temi') echo 'style="color:grey"' ?> href="./temi">Temi</a>
                </li>
                <li class="product">
                    <a class="productName" <?php if (isset($pageSelected) && $pageSelected == 'smartTable') echo 'style="color:grey"' ?> href="./smart-table">SmartTable</a>
                </li>
                <li class="product">
                    <a class="productName" <?php if (isset($pageSelected) && $pageSelected == 'ares') echo 'style="color:grey"' ?> href="./ares">Ares</a>
                </li>
            </ul>
            <div class="productContent"><img class='productContentIMG' src=''></div>
        </div>
        <div class="category" <?php if (isset($pageSelected) && ($pageSelected == 'aboutUs' || $pageSelected == 'solidarity' || $pageSelected == 'successCases' || $pageSelected == 'workWithUs')) echo 'style="color:grey"' ?>>NOSOTROS
            <img class="symbol" src="../resources/icons/caret-down-solid.svg">
            <ul class="categoryContent us">
                <li class="linkUs">
                    <a <?php if (isset($pageSelected) && $pageSelected == 'aboutUs') echo 'style="color:grey"' ?> href="<?php if (!isset($basePath)) echo './about-us';
                                                                                                                        else echo $basePath . 'about-us' ?>">

                        <img src="../resources/icons/about-us.png">
                        Quienes Somos
                    </a>
                </li>
                <li class="linkUs"><a <?php if (isset($pageSelected) && $pageSelected == 'success') echo 'style="color:grey"' ?> href="<?php if (!isset($basePath)) echo './success-cases';
                                                                                                                                        else echo $basePath . 'about-us' ?>">

                        <img src="../resources/icons/about-us.png">
                        Casos de Éxito
                    </a>
                </li>
                <li class="linkUs"><a <?php if (isset($pageSelected) && $pageSelected == 'solidarity') echo 'style="color:grey"' ?> href="<?php if (!isset($basePath)) echo './solidarity';
                                                                                                                                            else echo $basePath . 'about-us' ?>">

                        <img src="../resources/icons/about-us.png">
                        Solidaridad
                    </a>
                </li>
                <li class="linkUs"><a <?php if (isset($pageSelected) && $pageSelected == 'workWithUs') echo 'style="color:grey"' ?> href="<?php if (!isset($basePath)) echo './work-with-us';
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