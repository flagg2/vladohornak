<head>
    <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Advision">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/booking.css">
</head>

<body>
    <div class="main-cont">
        <?php include('./menu.php') ?>
        <h1 class="heading">Objednajte sa jednoducho pomocou služby Bookio</h1>
        <iframe src="https://services.bookio.com/vlado-hornak-hair-salon/widget?lang=sk"></iframe>
        <?php include('./footer.php') ?>
    </div>
        <script
      src="https://code.jquery.com/jquery-3.5.1.min.js"
      integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
      crossorigin="anonymous"></script>
    <script src="./assets/js/booking.js"></script>
</body>