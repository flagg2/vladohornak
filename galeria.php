<?php 
function fillItems($times){
    $item = " <div>
                <ion-icon name='scan-outline'></ion-icon>
            </div>";
    echo str_repeat($item, $times);
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Advision">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/gallery.css">
</head>

<body>
    <?php include('menu.php'); ?>
    <div class="lightbox">
        <div><img>
            <ion-icon name="close-outline"></ion-icon>
        </div>
    </div>
    <h1 class="heading">Galéria</h1>
    <h2>Great Lengths - predlžovanie vlasov</h2>
    <div class="container">
        <div class="image-gallery one">
           <?php fillItems(12) ?>
        </div>
    </div>
    <h2>Interiér salónu</h2>
    <div class="container">
        <div class="image-gallery two">
            <?php fillItems(7) ?>
        </div>
    </div>
    <h2>Naša tvorba - predlžovanie vlasov</h2>
    <div class="container">
        <div class="image-gallery three">
            <?php fillItems(12) ?>
        </div>
    </div>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
    <script src="./assets/js/gallery.js"></script>
    <?php include('footer.php'); ?>
</body>
