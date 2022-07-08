<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Bumerania</title>
    <?php include_once './resources/style/loader.php' ?>
</head>

<body>
    <?php $pageSelected = 'contact';
    include_once './resources/includes/header.php' ?>
    <main>
        <section>
            <article class="contact">
                <div class="formContact">
                    <div class='hello'>Hola,<br>Bumerania!</div>
                    <div class='subHello'>Bumerania Robotics – España</div>
                    <div class='title'>
                        <hr class="green" style='width:20%;margin-top:2em;height: 0.5em'>
                    </div>
                    <div class='mail'><img src='./resources/icons/envelope.svg'>hola@bumerania.com</div>
                    <div class='phone'><img src='./resources/icons/phone-flip-solid.svg'>+34 91 901 18 61</div>
                    <iframe src=' https://forms.zohopublic.com/bumeran/form/contactowebform/formperma/9nNag3net1hjBnYDF_r-Ekr71tyaGVHBVZayzMOdnx8'></iframe>
                </div>
            </article>
        </section>
    </main>
    <?php include_once './resources/includes/footer.php' ?>
</body>

</html>