<?php

include("../cls/CommonHtml.php");
$ComHtml = new CommonHtml();

?>
<!doctype html>
<html lang="ja">

<head>
    <?php echo $ComHtml->_Html_Head(2); ?>
</head>

<body>

    <header role="banner">
        <?php echo $ComHtml->_Html_Header(2); ?>
    </header> <!-- END header -->

    <section class="home-slider-loop-false  inner-page owl-carousel">
        <div class="slider-item" style="background-image: url('../img/hero_2.jpg');">

            <div class="container">
                <div class="row slider-text align-items-center justify-content-center">
                    <div class="col-md-8 text-center col-sm-12 element-animate">
                        <h1>Our Recipes</h1>

                    </div>
                </div>
            </div>

        </div>

    </section>

    <section class="section bg-light element-animate">

        <div class="clearfix mb-5 pb-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 text-center heading-wrap">
                        <h2>Our Menu</h2>
                        <span class="back-text-dark">Menu</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">

            <div class="row no-gutters">
                <div class="col-md-6">
                    <div class="sched d-block d-lg-flex">
                        <div class="bg-image order-2" style="background-image: url('../img/dishes_4.jpg');"></div>
                        <div class="text order-1">
                            <h3>Grilled Caesar salad, shaved reggiano</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...</p>
                            <p class="text-primary h3">$12.00</p>
                        </div>

                    </div>

                    <div class="sched d-block d-lg-flex">
                        <div class="bg-image" style="background-image: url('../img/dishes_1.jpg');"></div>
                        <div class="text">
                            <h3>Spicy Calamari and beans</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...</p>
                            <p class="text-primary h3">$12.00</p>

                        </div>

                    </div>

                </div>

                <div class="col-md-6">
                    <div class="sched d-block d-lg-flex">
                        <div class="bg-image order-2" style="background-image: url('../img/dishes_2.jpg');"></div>
                        <div class="text order-1">
                            <h3>Bacon wrapped wild gulf prawns</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...</p>
                            <p class="text-primary h3">$18.00</p>

                        </div>

                    </div>

                    <div class="sched d-block d-lg-flex">
                        <div class="bg-image" style="background-image: url('../img/dishes_3.jpg');"></div>
                        <div class="text">
                            <h3>Seared ahi tuna fillet*, honey-ginger sauce</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...</p>
                            <p class="text-primary h3">$16.00</p>

                        </div>

                    </div>

                </div>
            </div>


        </div>
    </section> <!-- .section -->

    <section class="section bg-light element-animate">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-center">
                    <span class="flaticon-cheers display-4 text-black d-block mb-4"></span>
                    <h4 class="mb-4 text-primary">Drinks</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae hic maiores. Velit nisi,
                        reprehenderit,
                        nobis officia.</p>
                </div>
                <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-center">
                    <span class="flaticon-fish display-4 text-black d-block mb-4"></span>
                    <h4 class="mb-4 text-primary">Sea Foods</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae hic maiores. Velit nisi,
                        reprehenderit,
                        nobis officia.</p>
                </div>
                <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-center">
                    <span class="flaticon-coffee-cup display-4 text-black d-block mb-4"></span>
                    <h4 class="mb-4 text-primary">Cup Coffees</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae hic maiores. Velit nisi,
                        reprehenderit,
                        nobis officia.</p>
                </div>
                <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-center">
                    <span class="flaticon-salad display-4 text-black d-block mb-4"></span>
                    <h4 class="mb-4 text-primary">Fresh Salad</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae hic maiores. Velit nisi,
                        reprehenderit,
                        nobis officia.</p>
                </div>
            </div>
        </div>
    </section>


    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Subsribe Newsletter</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore ex temporibus magni
                                ipsam inventore
                                dolorum sunt, amet vel.</p>
                        </div>

                        <form action="" class="col-12">
                            <div class="row align-items-center">
                                <div class="col-md-8 mb-3 mb-md-0">
                                    <input type="text" class="form-control" placeholder="Enter Email Address">
                                </div>
                                <div class="col-md-4">
                                    <input type="submit" class="btn btn-primary btn-block" value="Subscribe">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer class="site-footer" role="contentinfo">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-6 mb-5">
                    <h3>rapport</h3>
                    <p class="mb-5">私たちは流行を追うよりも、人生に寄り添えるような街のケーキ屋を目指しています。シュークリーム、苺ショート、モンブラン、スリール（チーズ）…
                        華美なデザインを追うよりも、どこか懐かしく、見るだけで唾液が出てくるようなお菓子を作っています。</p>
                    <ul class="list-unstyled footer-link d-flex footer-social">
                        <!-- <li><a href="#" class="p-2"><span class="fa fa-twitter"></span></a></li> -->
                        <li><a href="https://ja-jp.facebook.com/pages/category/Food---Beverage-Company/%E3%83%91%E3%83%86%E3%82%A3%E3%82%B9%E3%83%AA%E3%83%BC%E3%83%A9%E3%83%9D%E3%83%BC%E3%83%AB-642798122467031/"
                                class="p-2"><span class="fa fa-facebook"></span></a></li>
                        <!-- <li><a href="#" class="p-2"><span class="fa fa-linkedin"></span></a></li> -->
                        <li><a href="https://www.instagram.com/rapport_honten/?utm_medium=copy_link" class="p-2"><span
                                    class="fa fa-instagram"></span></a></li>
                    </ul>

                </div>
                <div class="col-md-3 mb-5">
                    <div class="mb-5">
                        <h3>営業時間</h3>
                        <p><strong class="d-block">月〜日</strong> AM10:00 - PM19:00</p>
                    </div>
                    <div>
                        <h3>お問い合せ</h3>
                        <ul class="list-unstyled footer-link">
                            <li class="d-block">
                                <span class="d-block">
                                    <a href="./pages/shop.php">shopへ</a>
                                </span>
                                <span class="text-white"></span>
                            </li>
                            <!-- <li class="d-block"><span class="d-block">Telephone:</span><span class="text-white">+1 242
                                    4942 290</span>
                            </li>
                            <li class="d-block"><span class="d-block">Email:</span><span
                                    class="text-white">info@yourdomain.com</span>
                            </li> -->
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 mb-5">
                    <h3>コンテンツ</h3>
                    <ul class="list-unstyled footer-link">
                        <li><a href="../index.php">RAPPORT</a></li>
                        <li><a href="company.php">COMPANY</a></li>
                        <li><a href="shop.php">SHOP</a></li>
                        <li><a href="#">RECRUIT</a></li>
                        <li><a href="cake.php">CAKE</a></li>
                        <li><a href="order.php">ORDER</a></li>
                    </ul>
                </div>
                <div class="col-md-3">

                </div>
            </div>
            <div class="row">
                <div class="col-12 text-md-center text-left">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                        document.write(new Date().getFullYear());
                        </script> patisserie rapport All Rights Reserved.
                        <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
                            target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- END footer -->

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#cf1d16" />
        </svg></div>

    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/jquery.waypoints.min.js"></script>

    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/magnific-popup-options.js"></script>


    <script src="../js/main.js"></script>
</body>

</html>