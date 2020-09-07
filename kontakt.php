<head>
    <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Advision">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/contact.css">
</head>

<body>
    <div class="main-cont">
        <?php include('./menu.php') ?>
        <h1 class="heading">Neváhajte a napíšte nám</h1>
        <div class="contact">
            <div class="cont upper">
                    <form action="/action_page.php">
                        
                        <input type="text" name="lname" required placeholder='Meno a priezvisko'>
                        <input type="email" name="lname" required placeholder='E-mail'>
                        <input type="text" name="lname" placeholder='Telefón'>
                        <textarea type="text" name="lname" required placeholder='Správa'></textarea>
                        <input class='submit' type="submit" value="Odoslať">
                    </form>
                    <div class="info">
                        <div class="cont">
                            <ion-icon name="location-outline"></ion-icon>
                            <p>Bajkalská 29/D 821 05 Bratislava</p>
                        </div>
                        <div class="cont">
                            <ion-icon name="call-outline"></ion-icon>
                            <a href="tel:+421 908 965 871">+421 908 965 871</a>
                        </div>
                        <div class="cont">
                            <ion-icon name="mail-outline"></ion-icon>
                            <a href="mailto:info@vladohornak.sk">info@vladohornak.sk</a>
                        </div>
                        <div class="cont">
                            <ion-icon name="globe-outline"></ion-icon>
                            <a href="https:/vladohornak.sk">www.vladohornak.sk</a>
                        </div>
                        <div class="cont">
                            <ion-icon name="document-text-outline"></ion-icon>
                            <div>
                                <p>SRO: VladoHornak s.r.o.</p>
                                <p>ICO: 10239102</p>
                                <p>DIC: 10239012</p>
                            </div>
                        </div>

                    </div>
            </div>
            <iframe class='map' src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2661.8685403115164!2d17.14792551561943!3d48.15133957922454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476c892b94ad8e7b%3A0x35d399a02fb7c7cf!2sVlado%20Hor%C5%88%C3%A1k%20-%20HAIR%20SALON!5e0!3m2!1ssk!2ssk!4v1598874198933!5m2!1ssk!2ssk" width="600" height="450" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <?php include('./footer.php') ?>
    </div>
</body>
