<?php

include("../cls/CommonHtml.php");
$ComHtml = new CommonHtml();

?>
<!doctype html>
<html lang="ja">

<head>
    <?php echo $ComHtml->_Html_Head(2); ?>
    <script type="text/javascript">
    // 店舗とケーキの対応表
    var shop_table = {
        "default": [true, true, true, true, true, true], // 初期表示用
        "honten": [false, true, true, false, true, false], // 本店
        "airport": [false, false, true, true, false, true], // 空港通り
        "mochida": [true, true, false, true, false, true], // 持田
        "hanamizuki": [true, false, false, false, false, false], // はなみずき通り
        "niihama": [false, true, true, false, true, false] // 新居浜
    };

    // 店ごとにケーキの表示を変える
    function inputShopChange() {
        var shopname = document.getElementById("shop").value;
        console.log("shopname:" + shopname);
        var flags = shop_table[shopname];
        for (i = 0; i < flags.length; i++) {
            var display_str = "none";
            if (flags[i])
                display_str = "block"; // blockだと表示
            else
                display_str = "none"; // noneだと非表示
            document.getElementById("cake" + i).style.display = display_str;
        }
    }
    window.onload = inputShopChange;
    </script>
</head>

<body>

    <header role="banner">
        <?php echo $ComHtml->_Html_Header(2); ?>
    </header> <!-- END header -->
    <div class="bg-clear"></div>
    <section class="home-slider-loop-false  inner-page owl-carousel">
        <div class="slider-item" style="background-image: url('../images/anpan.jpg');">

            <div class="container">
                <div class="row slider-text align-items-center justify-content-center">
                    <div class="col-md-8 text-center col-sm-12 element-animate">
                        <h1>order cake</h1>

                    </div>
                </div>
            </div>

        </div>

    </section>


    <section class="section element-animate">

        <div class="container">

            <div class="col-lg-12">
                <form action="#" method="post">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="shop">受取り希望店舗</label>
                            <select id="shop" class="form-control" style="height: 3.5rem;" onchange="inputShopChange()">
                                <option hidden value="default">店舗を選択してください</option>
                                <option value="honten">ラポール本店</option>
                                <option value="airport">ラポール空港通店</option>
                                <option value="mochida">ラポール持田店</option>
                                <option value="hanamizuki">ラポールはなみずき店</option>
                                <option value="niihama">ラポール新居浜店</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="date">受取り希望日</label>
                            <br>
                            <input type="date" id="today" name="today" 　value="" class="form-control" 　min="2021-08-01"
                                max="2021-12-31" />
                        </div>
                    </div>
                </form>

                <div class="row">
                    <div class="col-md-6 mb-4" id="cake0">
                        <div class="blog d-block d-lg-flex">
                            <div class="bg-image bg-image2"
                                style="background-image: url('../images/cake_image01.jpg');"></div>
                            <div class="text">
                                <h3>2段<br>ケーキ</h3>
                                <p class="sched-time">
                                    <!-- <span><span class="fa fa-calendar"></span> April 22, 2018</span> -->
                                    <span>季節のフルーツをたっぷり使った華やかなケーキ。</span><br>
                                </p>
                                <span>・4号2,527円・5号3,218円</span><br>
                                <span>・6号4,126円・7号5,530円</span>
                                <p>
                                <form method="GET">
                                    <a href="order_form.php?cake_no=1" class="btn btn-primary btn-sm">注文する</a>
                                </form>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4" id="cake1">
                        <div class="blog d-block d-lg-flex">
                            <div class="bg-image bg-image2"
                                style="background-image: url('../images/cake_image02.jpg');"></div>
                            <div class="text">
                                <h3>いちごと<br>ブルーベリーの<br>
                                    デコレーション</h3>
                                <p class="sched-time">
                                    <!-- <span><span class="fa fa-calendar"></span> April 22, 2018</span> <br> -->
                                    <span>ベリーの酸味と生クリームは相性◎</span><br>
                                </p>
                                <span>・4号2,614円・5号3,326円</span>
                                <span>・6号4,223円・7号5,638円</span>
                                <p>
                                <form method="GET">
                                    <a href="order_form.php?cake_no=2" class="btn btn-primary btn-sm">注文する</a>
                                </form>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4" id="cake2">
                        <div class="blog d-block d-lg-flex">
                            <div class="bg-image bg-image2"
                                style="background-image: url('../images/cake_image03.jpg');"></div>
                            <div class="text">
                                <h3>いちごデコレーション</h3>
                                <p class="sched-time">
                                    <!-- <span><span class="fa fa-calendar"></span> April 22, 2018</span>  -->
                                    <span>人気No1!!2層のサンドにもいちごを贅沢に使用。</span><br>
                                    <!-- <br> -->
                                </p>
                                <span>・4号2,527円・5号3,218円</span><br>
                                <span>・6号4,126円・7号5,530円</span>

                                <p>
                                <form method="GET">
                                    <a href="order_form.php?cake_no=3" class="btn btn-primary btn-sm">注文する</a>
                                </form>
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4" id="cake3">
                        <div class="blog d-block d-lg-flex">
                            <div class="bg-image bg-image2"
                                style="background-image: url('../images/cake_image04.jpg');"></div>
                            <div class="text">
                                <h3>ガトーショコラ</h3>
                                <p class="sched-time">
                                    <!-- <span><span class="fa fa-calendar"></span> April 22, 2018</span> <br> -->
                                    <span>ずっしり重量感のある土台にたっぷりの生クリームが人気！</span><br>
                                </p>
                                <span>・4号2,322円・5号3,024円</span>
                                <span>・6号4,126円</span>
                                <p>
                                <form method="GET">
                                    <a href="order_form.php?cake_no=4" class="btn btn-primary btn-sm">注文する</a>
                                </form>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4" id="cake4">
                        <div class="blog d-block d-lg-flex">
                            <div class="bg-image bg-image2"
                                style="background-image: url('../images/cake_image05.jpg');"></div>
                            <div class="text">
                                <h3>ショコラ</h3>
                                <p class="sched-time">
                                    <!-- <span><span class="fa fa-calendar"></span> April 22, 2018</span> <br> -->
                                    <span>くちどけの良い2種類のクリームを使った優しいチョコレートケーキ。</span><br>
                                </p>
                                <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...</p> -->
                                <span>・4号2,527円・5号3,218円</span>
                                <span>・6号4,126円・7号5,530円</span>
                                <p>
                                <form method="GET">
                                    <a href="order_form.php?cake_no=5" class="btn btn-primary btn-sm">注文する</a>
                                </form>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4" id="cake5">
                        <div class="blog d-block d-lg-flex">
                            <div class="bg-image bg-image2"
                                style="background-image: url('../images/cake_image06.jpg');"></div>
                            <div class="text">
                                <h3>スクエアケーキ</h3>
                                <p class="sched-time">
                                    <!-- <span><span class="fa fa-calendar"></span> April 22, 2018</span> <br> -->
                                    <span>ご要望にあわせてオリジナルケーキもお作りできます。</span><br>
                                </p>
                                <span>Sサイズ：20cm✕20cm　6,246円～</span>

                                <p>
                                <form method="GET">
                                    <a href="order_form.php?cake_no=6" class="btn btn-primary btn-sm">注文する</a>
                                </form>
                                </p>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

    </section> <!-- .section -->





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