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
    <div class="bg-clear"></div>
    <section class="home-slider-loop-false  inner-page owl-carousel">
        <div class="slider-item" style="background-image: url('../images/shu.jpg');">

            <div class="container">
                <div class="row slider-text align-items-center justify-content-center">
                    <div class="col-md-8 text-center col-sm-12 element-animate">
                        <h1>Contact</h1>

                    </div>
                </div>
            </div>

        </div>

    </section>


    <section class="section element-animate">
        <div class="clearfix mb-5 pb-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 text-center heading-wrap">
                        <h2>contact</h2>
                        <!-- <span class="back-text">Cont</span> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <form action="#" method="post">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="name">Name</label>
                                <input type="text" id="name" class="form-control ">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="phone">Phone</label>
                                <input type="text" id="phone" class="form-control ">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" class="form-control ">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="message">??????????????????</label>
                                <textarea name="message" id="message" class="form-control " cols="30"
                                    rows="8"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="submit" value="Send Message" class="btn btn-primary">
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-6 pl-2 pl-lg-5">

                    <div class="col-md-8 mx-auto contact-form-contact-info">
                        <h4 class="mb-5">Contact Details</h4>
                        <p>????????????????????????</p>
                        <p class="d-flex">
                            <span class="ion-ios-location icon mr-5"></span>
                            <span>???????????????????????????1394-1</span>
                        </p>

                        <p class="d-flex">
                            <span class="ion-ios-telephone icon mr-5"></span>
                            <span>TEL / 089-916-5922</span>
                        </p>

                        <p class="d-flex">
                            <span class="ion-android-mail icon mr-5"></span>
                            <span>info@yourdomain.com</span>
                        </p>
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
                    <p class="mb-5">???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
                        ????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>
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
                        <h3>????????????</h3>
                        <p><strong class="d-block">?????????</strong> AM10:00 - PM19:00</p>
                    </div>
                    <div>
                        <h3>???????????????</h3>
                        <ul class="list-unstyled footer-link">
                            <li class="d-block">
                                <span class="d-block">
                                    <a href="./pages/shop.php">shop???</a>
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
                    <h3>???????????????</h3>
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