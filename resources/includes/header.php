<header>
    <a href="#"><img src="../resources/img/logo-blanco-cortado.png" alt="Bumerania logo" class="logo"></a>
    <nav>
        <a href="#" <?php if (isset($pageSelected) && $pageSelected == 'index') echo 'class=pageSelected' ?>>INICIO</a>
        <div class="category" <?php if (isset($pageSelected) && $pageSelected == 'solutions') echo 'style="color:grey"' ?>>SOLUCIONES
            <img src="../resources/icons/caret-down-solid.svg">
            <ul class="categoryContent">
                <li><a href="./bumibot">BumiBot</a></li>
                <li>Temi*</li>
                <li>SmartTable</li>
                <li>Ares</li>
            </ul>
        </div>
        <div class="category" <?php if (isset($pageSelected) && $pageSelected == 'about us') echo 'style="color:grey"' ?>>NOSOTROS<img src="../resources/icons/caret-down-solid.svg">
            <ul class="categoryContent us">
                <li>
                    <a href="<?php if (!isset($basePath)) echo './about-us';
                                else echo $basePath . 'about-us' ?>">
                        <div>
                            <img src="../resources/icons/about-us.png">
                            <div>Quienes Somos</div>
                        </div>
                    </a>
                </li>
                <li>Casos de Éxito</li>
                <li>Solidaridad</li>
                <li>Trabaja con Nosotros</li>
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