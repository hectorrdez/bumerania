<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bumibot - Bumerania Robotics</title>
    <?php include_once './resources/style/loader.php' ?>
</head>

<body>
    <?php $pageSelected = 'bumibot';
    include_once './resources/includes/header.php' ?>
    <main>
        <!-- <section class="video" style="overflow-y: hidden; height: 660px">
            <div class="video">
                <iframe style="object-fit:contain" src="https://www.youtube.com/embed/uHf_8AYcwLs?controls=0&autoplay=1&mute=1&rel=0&playsinline=1&enablejsapi=1&origin=https%3A%2F%2Fbumerania.com&widgetid=1" frameborder="0" allow="autoplay; accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowFullscreen="1" id="widget2" width="640" height="360"></iframe>
            </div>
            <div class="superposition">
                <div class="content">
                    <div class="title">
                        Bumibot
                    </div>
                    <div class="center">
                        <div style="width: 30%;">
                            <hr class="green">
                        </div>
                    </div>
                    <div class="subtitle">El Robot Camarero</div>
                </div>
            </div>
        </section> -->
        <section class='bg'>
            <article class="category">
                <div class="content center" style='font-size:2em;font-style:italic;font-family:"Roboto"'>
                    Una experiencia gastronómica de valor
                </div>
            </article>
        </section>
        <section>
            <article class="white">
                <div class="pageBumi">
                    <div class="detailsBumi">
                        <div class="titleBumi">
                            Diseño compacto y ligero que mejora su movilidad
                        </div>
                        <div class="descriptionBumi">
                            Los robots camareros son una opción novedosa y eficiente para complementar a los profesionales del sector. Son ágiles, dinámicos e interactivos, preparados para seguir el ritmo de los procesos en un restaurante, bar o cafetería, incluso en espacios ajustados.
                        </div>
                        <div class="listBumi">
                            <ul>
                                <li><img src='./resources/icons/check-solid.svg'>Gestión digital</li>
                                <li><img src='./resources/icons/check-solid.svg'>Visión SLAM</li>
                                <li><img src='./resources/icons/check-solid.svg'>Sistema inteligente para evitar obstáculos</li>
                                <li><img src='./resources/icons/check-solid.svg'>Opciones múltiples de promoción</li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <img src="./resources/img/bumibot.png">
                    </div>
                </div>
            </article>
        </section>
        <section class="bg">
            <article class='bumibot'>
                <div class="title">
                    Solución avanzada de doble SLAM con completa cobertura en cualquier espacio
                </div>
                <p class="subtitle">
                    La solución SLAM dual le permite al robot camarero reconocer los marcadores de ubicación garantizando su recorrido inclusive con muy poca luz.
                </p>
                <video autoplay loop>
                    <source src='/resources/video/bumi1.mp4' type='video/mp4'>
                </video>
            </article>
            <article class='bumibot'>
                <div class="title">
                    Cooperación Multi-Robot
                </div>
                <div class="subtitle">
                    <p>Cuando dos o más de nuestros robots camareros se encuentran en una bifurcación, pueden evitar su encuentro de forma autónoma sin la intervención humana, según sea la prioridad del número de robot programada para viajar de forma inteligente.</p>
                </div>
                <video autoplay loop>
                    <source src='/resources/video/bumi2.mp4' type='video/mp4'>
                </video>
            </article>
        </section>
        <section>
            <article class="white">
                <div class="bumibotSkills">
                    <div class="bumibotHeader">
                        <div class="title">Una propuesta <span>novedosa</span> que dinamiza el establecimiento</div>
                        <div class="subtitle">
                            La robótica inteligente colaborativa, como son los robots camarero, ocupa un importante eslabón en la cadena del servicio de mesas: lleva y trae platos, bebidas, bayetas; lo que haga falta para hacer la tarea más fácil a los camareros, que al aliviar el estrés de la sala pueden concentrarse mucho más en el trato cercano y amable con los clientes.
                        </div>
                    </div>
                    <div class="bumibotParts">
                        <img src='./resources/img/bumibot/1.jpg'>
                        <div class="bumibotInfo">
                            <div class='title'>Altavoz y micrófono</div>
                            <div class='subtitle'>
                                Matriz de timbre de 6 micrófonos, cobertura 360º, efectividad de hasta 5 metros, captación precisa, tono claro y suave.
                            </div>
                        </div>
                    </div>
                    <div class="bumibotParts">
                        <div class="bumibotInfo">
                            <div class='title'>Bandeja grande y abierta</div>
                            <div class='subtitle'>
                                <ul>
                                    <li>Área de una sola bandeja: 0,2m<sup>2</sup></li>
                                    <li>Capacidad total: 40 Kg</li>
                                    <li>Fácil recogida de los alimentos</li>
                                </ul>
                            </div>
                        </div>
                        <img src='./resources/img/bumibot/2.jpg'>
                    </div>
                    <div class="bumibotParts">
                        <img src='./resources/img/bumibot/3.jpg'>
                        <div class="bumibotInfo">
                            <div class='title'>Indicador con luces de color</div>
                            <div class='subtitle'>
                                <ul>
                                    <li>Verde: cargando</li>
                                    <li>Azul: cargado totalmente</li>
                                    <li>Rojo: fallo</li>
                                    <li>Intermitente: girando</li>
                                    <li>Cada estado está indicado de forma clara</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="bumibotParts">
                        <div class="bumibotInfo">
                            <div class='title'>Chasis estable y sólido</div>
                            <div class='subtitle'>
                                Equipado con radar y sistema de detección de gran rendimiento, movimiento equilibrado y navegación inercial.
                            </div>
                        </div>
                        <img src='./resources/img/bumibot/4.jpg'>
                    </div>
                </div>
                <img src='./resources/img/bumibot/divisor.jpg'>
                <div class="bumibotSkills">
                    <div class="bumibotHeader">
                        <div class="title">Versátil y fácil de usar</div>
                    </div>
                </div>
                <div class="bumibotSkills">
                    <div class="bumibotHeader">
                        <div class="title">Versátil y fácil de usar</div>
                    </div>
                </div>
                <div class="bumibotSkills">
                    <div class="bumibotHeader">
                        <div class="title">Versátil y fácil de usar</div>
                    </div>
                </div>
            </article>
        </section>
    </main>
    <?php include_once './resources/includes/footer.php' ?>
</body>

</html>