<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quienes Somos</title>
    <?php include_once './resources/style/loader.php' ?>
</head>

<body>
    <?php $pageSelected = 'aboutUs';
    include_once './resources/includes/header.php' ?>
    <main>
        <section class="portada">
            <article class="img">
                <img src="./resources/img/foto_fachada_bumerania.jpg" style="object-fit:contain" alt="">
            </article>
            <div class="superposition">
                <div class="content">
                    <div class="title">Quiénes somos</div>
                    <div class="center">
                        <div style="width: 20%; height: 1em">
                            <hr class="green">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <article class="white">
                <div class="wrap2 expand">
                    <div class="img">
                        <a href="https://www.linkedin.com/in/isidrofernandezortuno/" target="_blank"><img src="./resources/img/foto-isidro-pnmu272y60pe2gdojmppi2td4ziyrcqy173mrt85u0.jpg" alt=""></a>
                        <div class="footerImg">Isidro Fernández. CEO de Bumerania Robotics</div>
                    </div>
                    <div class="content">
                        <div class=" title">Pasión, sueño, marca.</div>
                        <div class="text">
                            <p>
                                Bumerania Robotics, empresa líder en robótica de servicio en Europa, nace en 2020, en plena pandemia, como un proyecto de robótica social y colaborativa para mejorar la calidad de vida de las personas. A través de nuestros robots y un software personalizado, según las necesidades de nuestros clientes, unimos experiencia, tecnología e innovación para ponerlas al servicio del bienestar de la sociedad.
                            </p>
                            <p> Nuestros robots, dotados de inteligencia artificial, interactúan con el entorno siendo especialmente eficientes en hoteles, restaurantes, comercios y centros comerciales, hospitales, museos o bibliotecas, entre otras muchas aplicaciones. Además, sin perder de vista nuestra esencia social y de servicio, trabajamos en el desarrollo de robots para la atención, cuidado y entretenimiento de personas mayores, dependientes y con diversidad funcional.</p>
                            <p>Con un marcado espíritu de internacionalización, estamos presentes a través de delegaciones comerciales, en Portugal, Suiza, Emiratos Árabes, Paraguay y Argentina.</p>
                            <p> Un proyecto apasionante, disruptivo e innovador por su alcance y posibilidades que define la delgada línea que separa el futuro de lo que ya es presente en nuestra compañía.</p>
                        </div>
                    </div>
                </div>
            </article>
            <article class="white">
                <div class="content2">
                    <div class="title">Empleados</div>
                    <div class="center">
                        <div style="width:50%">
                            <hr class="green">
                        </div>
                    </div>
                    <div class="grid">
                        <div class="chip">
                            <a href="https://www.linkedin.com/in/jonathan-mortes-esquer-894875183/" target="_blank">
                                <div class="img"><img src="./resources/img/employers/1649406970387.jfif" alt=""></div>
                                <div class="name">Jonathan Mortes Esquer</div>
                                <div class="function">CTO & COO</div>
                            </a>
                        </div>
                        <div class="chip">
                            <a href="https://www.linkedin.com/in/taianepaz/" target="_blank">
                                <div class="img"><img src="https://media-exp2.licdn.com/dms/image/C5603AQGsqZcOddY2PA/profile-displayphoto-shrink_200_200/0/1591813150059?e=1662595200&v=beta&t=92578otZVO2v8b72bxQd46iJoE7i4_9EbNTeeBaeoLM" alt=""></div>
                                <div class="name">Taiane Santos da Paz </div>
                                <div class="function">Export Commercial Department</div>
                            </a>
                        </div>
                        <div class="chip">
                            <a href="https://www.linkedin.com/in/hectorrdez/" target="_blank">
                                <div class="img"><img src="https://media-exp2.licdn.com/dms/image/C4E03AQE_VbNXQYmc9w/profile-displayphoto-shrink_200_200/0/1631180872803?e=1662595200&v=beta&t=vgLUaxVH51bgpxI31I8jN_UU5W0bjqJiqT-4FRoVTtQ" alt=""></div>
                                <div class="name">Héctor Rodríguez Tovar</div>
                                <div class="function">Web Dev (en prácticas)</div>
                            </a>
                        </div>
                        <div class="chip">
                            <a href="https://www.linkedin.com/in/antonioblancoccordoba/" target="_blank">
                                <div class="img"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt=""></div>
                                <div class="name">Antonio Blanco Córdoba</div>
                                <div class="function">Web Dev (en prácticas)</div>
                            </a>
                        </div>
                    </div>
                </div>
            </article>
        </section>
    </main>
    <?php include_once './resources/includes/footer.php' ?>
</body>

</html>