<head>
    <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Advision">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/index.css">
</head>


<body>
    <div class="main-cont">
        <?php include('./menu.php') ?>
        <div class="slideshow">
            <!-- Slider main container -->
            <div class="swiper-container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide"><img src="assets/img/genesis.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/genesis2.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/genesis3.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/genesis4.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/genesis5.jpg" alt=""></div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                <!-- If we need scrollbar 
                <div class="swiper-scrollbar"></div>-->
            </div>
        </div>
        <div class="services">
            <div class="service-cont">
                <img src='assets/img/ikona1.svg'>
            </div>
            <div class="service-cont">
                <img src='assets/img/ikona1.svg'>
            </div>
            <div class="service-cont">
                <img src='assets/img/ikona1.svg'>
            </div>
        </div>
        <div class="brands">
            <img src='assets/img/brand1.png'>
            <img src='assets/img/brand2.png'>
            <img src='assets/img/brand3.png'>
            <img src='assets/img/brand4.png'>
            <img src='assets/img/brand5.png'>
        </div>
        <?php include('./footer.php') ?>
    </div>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="assets/js/index.js"></script>
</body>
