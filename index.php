<?php

include("cls/CommonHtml.php");
$ComHtml = new CommonHtml();

?>
<!doctype html>
<html lang="ja">

<head>
    <?php echo $ComHtml->_Html_Head(1); ?>
</head>

<body>

    <header role="banner">
        <?php echo $ComHtml->_Html_Header(1); ?>
    </header> <!-- END header -->

    <div class="bg-clear"></div>
    <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url('images/deko.jpg');">

            <div class="container">
                <div class="row slider-text align-items-center justify-content-center">
                    <div class="col-md-8 text-center col-sm-12 element-animate">
                        <h1>patisserie rapport</h1>
                        <!-- <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit,
            necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.</p> -->
                        <!-- <p><a href="#" class="btn btn-white btn-outline-white">Get Started</a></p> -->
                    </div>
                </div>
            </div>

        </div>

        <div class="slider-item" style="background-image: url('images/taruto.jpg');">
            <div class="container">
                <div class="row slider-text align-items-center justify-content-center">
                    <div class="col-md-8 text-center col-sm-12 element-animate">
                        <h1>patisserie rapport</h1>
                        <!-- <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit,
            necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.</p> -->
                        <!-- <p><a href="#" class="btn btn-white btn-outline-white">Get Started</a></p> -->
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- END slider -->


    <!-- <section class="section  element-animate">
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
    </section> -->

    <section class="section element-animate">

        <div class="clearfix mb-5 pb-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 text-center heading-wrap">
                        <h2>Shop List</h2>
                        <span class="back-text">SHOPS</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="wrap">
            <div class="owl-carousel centernonloop">
                <a href="#" class="item-dishes">
                    <div class="text">
                        <!-- <p class="dishes-price">$11.50</p> -->
                        <h2 class="dishes-heading">ラポール本店</h2>
                    </div>
                    <img src="http://www.kamu-group.com/test2019/resources/shop_img00.JPG" alt="" class="img-fluid">
                </a>
                <a href="#" class="item-dishes">
                    <div class="text">
                        <!-- <p class="dishes-price">$12.00</p> -->
                        <h2 class="dishes-heading">ラポール空港通店</h2>
                    </div>
                    <img src="http://www.kamu-group.com/resources/shop_img04.jpg" alt="" class="img-fluid">
                </a>
                <a href="#" class="item-dishes">
                    <div class="text">
                        <!-- <p class="dishes-price">$11.00</p> -->
                        <h2 class="dishes-heading">ラポール持田店</h2>
                    </div>
                    <img src="http://www.kamu-group.com/resources/shop_img03.jpg" alt="" class="img-fluid">
                </a>
                <a href="#" class="item-dishes">
                    <div class="text">
                        <!-- <p class="dishes-price">$12.00</p> -->
                        <h2 class="dishes-heading">ラポールはなみずき店</h2>
                    </div>
                    <img src="http://www.kamu-group.com/resources/shop_img05.jpg" alt="" class="img-fluid">
                </a>
                <a href="#" class="item-dishes">
                    <div class="text">
                        <!-- <p class="dishes-price">$12.00</p> -->
                        <h2 class="dishes-heading">ラポール新居浜店</h2>
                    </div>
                    <img src="http://www.kamu-group.com/test2019/resources/shop_img07.jpg" alt="" class="img-fluid">
                </a>
                <a href="#" class="item-dishes">
                    <div class="text">
                        <!-- <p class="dishes-price">$12.00</p> -->
                        <h2 class="dishes-heading">【姉妹店】三日月とカフェ<br>新空港通店</h2>
                    </div>
                    <img src="http://www.kamu-group.com/resources/shop_img02.jpg" alt="" class="img-fluid">
                </a>
                <a href="#" class="item-dishes">
                    <div class="text">
                        <!-- <p class="dishes-price">$12.00</p> -->
                        <h2 class="dishes-heading">【姉妹店】三日月とカフェ<br>伊予店</h2>
                    </div>
                    <img src="http://www.kamu-group.com/resources/shop_img06.jpg" alt="" class="img-fluid">
                </a>
                <a href="#" class="item-dishes">
                    <div class="text">
                        <!-- <p class="dishes-price">$12.00</p> -->
                        <h2 class="dishes-heading">【姉妹店】三日月とカフェ<br>井門店</h2>
                    </div>
                    <img src="http://www.kamu-group.com/test2019/resources/shop_img08.jpg" alt="" class="img-fluid">
                </a>
            </div>
        </div>

    </section> <!-- .section -->

    <section class="section bg-light element-animate">

        <div class="clearfix mb-5 pb-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 text-center heading-wrap">
                        <h2>Cake</h2>
                        <span class="back-text-dark">Cake</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">

            <div class="row no-gutters">
                <div class="col-md-6">
                    <div class="sched d-block d-lg-flex">
                        <div class="bg-image order-2"
                            style="background-image: url('http://www.kamu-group.com/resources/choucream.jpg');"></div>
                        <div class="text order-1">
                            <h3>ラポールシュー</h3>
                            <p>サクサクの生地にたっぷりのクリームが詰まっています。ボリュームがあるけど、あっさり食べられる。ラポール自慢の一品です。</p>
                            <p class="text-primary h3">205円(税込)</p>
                        </div>

                    </div>

                    <div class="sched d-block d-lg-flex">
                        <div class="bg-image"
                            style="background-image: url('http://www.kamu-group.com/resources/fruit_cake.jpg');">
                        </div>
                        <div class="text">
                            <h3>フルーツデコレーションケーキ</h3>
                            <p>しっとりとしたスポンジと軽い口どけのミルキーな生クリームは、試作を何度も繰り返してできた、絶妙なバランスです。 鮮度いっぱいのフルーツがたっぷり盛り付けられています。</p>
                            <p class="text-primary h3">3,218円(税込)</p>

                        </div>

                    </div>

                </div>

                <div class="col-md-6">
                    <div class="sched d-block d-lg-flex">
                        <div class="bg-image order-2"
                            style="background-image: url('http://www.kamu-group.com/resources/smileycheese.jpg');">
                        </div>
                        <div class="text order-1">
                            <h3>スリール
                            </h3>
                            <p>見ただけでつられて笑顔になってしまうラポールオリジナルチーズケーキ。シリーズでショコラ味もあります。 シリーズでショコラ味もあります。</p>
                            <p></p>
                            <p class="text-primary h3">194円(税込)</p>

                        </div>

                    </div>

                    <div class="sched d-block d-lg-flex">
                        <div class="bg-image"
                            style="background-image: url('http://www.kamu-group.com/resources/tart.jpg');"></div>
                        <div class="text">
                            <h3>タルトスリール</h3>
                            <p>
                                スリール（チーズ）から生まれた焼き菓子。タルトスリールはフランス語で「笑顔のタルト」という意味です。スリール（チーズ）と同じ材料を使って焼き上げたラポールオリジナルの焼き菓子です。
                            </p>
                            <p class="text-primary h3">259円(税込)</p>

                        </div>

                    </div>

                </div>
            </div>


        </div>
    </section> <!-- .section -->



    <section class="section element-animate">

        <div class="clearfix mb-5 pb-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 text-center heading-wrap">
                        <h2>Testimonial</h2>
                        <span class="back-text">Testi</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <blockquote class="testimonial">
                        <!-- <p>
                            &ldquo;私たちは流行を追うよりも、人生に寄り添えるような街のケーキ屋を目指しています。華美なデザインを追うよりも、どこか懐かしく、見るだけで唾液が出てくるようなお菓子を作っています。「おばあちゃんにお祝いしてもらったバースデーケーキで、今、私が娘とお祝いできる幸せ」そんな3世代がつながり、安心できる身近な存在にラポールはなりたいと願っています。
                            &rdquo;</p>
                        <div class="d-flex author">
                            <img src="http://www.kamu-group.com/resources/company_img02.jpg" alt="" class="mr-4">
                            <div class="author-info">
                                <h4>橘　憲一郎</h4>
                                <p>代表取締役</p>
                            </div>
                        </div> -->
                    </blockquote>
                </div>
                <div class="col-md-6">
                    <blockquote class="testimonial">
                        <p>
                            &ldquo;私たちは流行を追うよりも、人生に寄り添えるような街のケーキ屋を目指しています。華美なデザインを追うよりも、どこか懐かしく、見るだけで唾液が出てくるようなお菓子を作っています。「おばあちゃんにお祝いしてもらったバースデーケーキで、今、私が娘とお祝いできる幸せ」そんな3世代がつながり、安心できる身近な存在にラポールはなりたいと願っています。
                            &rdquo;</p>
                        <div class="d-flex author">
                            <img src="http://www.kamu-group.com/resources/company_img02.jpg" alt="" class="mr-4">
                            <div class="author-info">
                                <h4>橘　憲一郎</h4>
                                <p>代表取締役</p>
                            </div>
                        </div>
                    </blockquote>
                </div>
                <div class="col-md-3">
                    <blockquote class="testimonial">
                        <!-- <p>
                            &ldquo;私たちは流行を追うよりも、人生に寄り添えるような街のケーキ屋を目指しています。華美なデザインを追うよりも、どこか懐かしく、見るだけで唾液が出てくるようなお菓子を作っています。「おばあちゃんにお祝いしてもらったバースデーケーキで、今、私が娘とお祝いできる幸せ」そんな3世代がつながり、安心できる身近な存在にラポールはなりたいと願っています。
                            &rdquo;</p>
                        <div class="d-flex author">
                            <img src="http://www.kamu-group.com/resources/company_img02.jpg" alt="" class="mr-4">
                            <div class="author-info">
                                <h4>橘　憲一郎</h4>
                                <p>代表取締役</p>
                            </div>
                        </div> -->
                    </blockquote>
                </div>

            </div>
        </div>
    </section> <!-- .section -->

    <section class="section element-animate">
        <div class="clearfix mb-5 pb-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 text-center heading-wrap">
                        <h2>Order Cake</h2>
                        <span class="back-text">ORDER CAKE</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="blog d-block d-lg-flex">
                        <div class="bg-image bg-image2" style="background-image: url('images/cake_image02.jpg');"></div>
                        <div class="text">
                            <h3>2段<br>ケーキ</h3>
                            <p class="sched-time">
                                <!-- <span><span class="fa fa-calendar"></span> April 22, 2018</span> <br> -->
                                <!-- <input type="date" id="today" name="today"　value="" class="form-control"　min="2021-08-01" max="2021-12-31"/> -->
                                <span>季節のフルーツをたっぷり使った華やかなケーキ。</span><br>
                            </p>
                            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...</p> -->
                            <span>・4号2,527円・5号3,218円</span><br>
                            <span>・6号4,126円・7号5,530円</span><br>

                            <p><a href="pages/order.php" class="btn btn-primary btn-sm">もっと見る</a></p>

                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="blog d-block d-lg-flex">
                        <div class="bg-image bg-image2" style="background-image: url('images/cake_image03.jpg');"></div>
                        <div class="text">
                            <h3>いちごデコレーション</h3>
                            <p class="sched-time">
                                <!-- <span><span class="fa fa-calendar"></span> April 22, 2018</span> <br> -->
                                <span>人気No1!!2層のサンドにもいちごを贅沢に使用。</span><br>
                            </p>
                            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...</p> -->
                            <span>・4号2,527円・5号3,218円</span><br>
                            <span>・6号4,126円・7号5,530円</span><br>

                            <p><a href="pages/order.php" class="btn btn-primary btn-sm">もっと見る</a></p>

                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section> <!-- .section -->


    <!-- <section class="py-5 bg-light">
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
    </section> -->


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
                        <li><a href="index.php">RAPPORT</a></li>
                        <li><a href="./pages/company.php">COMPANY</a></li>
                        <li><a href="./pages/shop.php">SHOP</a></li>
                        <li><a href="#">RECRUIT</a></li>
                        <li><a href="./pages/cake.php">CAKE</a></li>
                        <li><a href="./pages/order.php">ORDER</a></li>
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
                        </script> All rights reserved | This template is made with
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

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>

    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>


    <script src="js/main.js"></script>
</body>

</html>