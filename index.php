<!DOCTYPE html>

<html lang="es">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bumerania Robotics - Robótica Social</title>
    <?php include_once './resources/style/loader.php' ?>
</head>

<body>

    <?php $pageSelected = 'index';
    include_once './resources/includes/header.php' ?>
    <main>
        <section class="video">
            <div class="video">
                <iframe style="object-fit:contain" height="720px" width="1280px" src="https://www.youtube-nocookie.com/embed/abv6JRsCsv4?autoplay=1&controls=0&disablekb=1&loop=1&modestbranding=1&mute=1&rel=0&showinfo=0&playlist=abv6JRsCsv4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture;"></iframe>
            </div>
        </section>
        <section class='bg'>
            <article class='title'>
                <div><span>bumerania robotics</span><br><span>Robótica social</span></div>
            </article>
            <article class='category'>
                <div class='title'>QUÉ<br>HACEMOS
                    <hr class='verde'><a href='./index.php#rrss'>Conócenos</a>
                </div>
                <div class='content'>
                    <div class='subtitle1'>Unimos la robótica social con la inteligencia artificial para aumentar la calidad de vida de las personas.</div>
                    <hr class='blanco'>
                    <div class='subtitle2'>La Robótica social y la Inteligencia Artificial son la nueva revolución que marcará un antes y un después en todos los sectores de la sociedad. Apostamos por el uso y el desarrollo de esta tecnología siempre que aporte mejores soluciones para ganar en bienestar y complementar el servicio profesional.</div>
                </div>
            </article>
        </section>
        <section>
            <article class='white'>
                <div><img src="http://localhost/resources/img/soluciones1.png" alt="soluciones"></div>
                <div><span>SOLUCIONES</span>
                    <hr class='verde'><span>
                        Robots dotados de inteligencia artificial que interactúan con el entorno
                    </span><span>
                        Soluciones de robótica que combinan las posibilidades de la inteligencia artificial y el reconocimiento facial con el desarrollo de software personalizado y que encuentran en la robótica de servicio el soporte adecuado.
                    </span>
                </div>
                <div><img src="http://localhost/resources/img/soluciones2.png" alt="soluciones"></div>
            </article>
        </section>
    </main>
    <?php
    include "./resources/includes/footer.php";
    ?>
</body>

</html>