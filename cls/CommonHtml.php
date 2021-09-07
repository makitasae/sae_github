<?php


    class CommonHtml
    {
        function _Html_Head($i)
        {
            $str="";
            if($i == 1){
                $str  = "";
            }
            if($i == 2){
                $str  = "../";
            }
                return <<<EOF

              
                    <title>Eatery Colorlib Website Template</title>
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

                    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">

                    <link rel="stylesheet" href="{$str}css/bootstrap.css">
                    <link rel="stylesheet" href="{$str}css/animate.css">
                    <link rel="stylesheet" href="{$str}css/owl.carousel.min.css">

                    <link rel="stylesheet" href="{$str}css/magnific-popup.css">


                    <link rel="stylesheet" href="{$str}fonts/ionicons/css/ionicons.min.css">
                    <link rel="stylesheet" href="{$str}fonts/fontawesome/css/font-awesome.min.css">
                    <link rel="stylesheet" href="{$str}fonts/flaticons/font/flaticon.css">

                    <!-- Theme Style -->
                    <link rel="stylesheet" href="{$str}css/style.css">
                    <link rel="stylesheet" href="{$str}css/myStyle.css">
            
            
EOF;

    
        }//function END

        function _Html_Header($i)
        {
            $str="";
            if($i == 1){
                $str  = "pages/";
                $str2 = ""; 
            }
            if($i == 2){
                $str  = "";
                $str2 = "../";
            }
                return <<<EOF

                
                <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                  <div class="container">
                    <a class="navbar-brand" href="{$str2}index.php">rapport</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05"
                      aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
            
                    <div class="collapse navbar-collapse" id="navbarsExample05">
                      <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
            
                        <li class="nav-item">
                          <a class="nav-link" href="{$str}company.php">company</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{$str}shop.php">shop</a>
                        </li>
                        <!-- <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="services.html" id="dropdown04" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Services</a>
                          <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="services.html">concept</a>
                            <a class="dropdown-item" href="services.html">recruit</a>
                            <a class="dropdown-item" href="services.html">cake</a>
                            <a class="dropdown-item" href="services.html">order cake</a>
                          </div>
                        </li> -->
                        <li class="nav-item">
                          <a class="nav-link" href="{$str}concept.php">concept</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="https://recruit-rapport.com/">recruit</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{$str}cake.php">cake</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{$str}order.php">order</a>
                        </li>
                      </ul>
            
                      <ul class="navbar-nav ml-auto">
                        <li class="nav-item cta-btn">
                          <a class="nav-link" href="{$str}contact.php">Contact Us</a>
                        </li>
                      </ul>
            
                    </div>
                  </div>
                </nav>
            
            
            
EOF;

    
        }//function END

        function _Html_Footer($i)
        {
            $str="";
            if($i == 1){
                $str  = "pages/";
                $str2 = ""; 
            }
            if($i == 2){
                $str  = "";
                $str2 = "../";
            }
                return <<<EOF

                
                <div class="container">
                <div class="row mb-5">
                  <div class="col-md-4 mb-5">
                    <h3>About Us</h3>
                    <p class="mb-5">私たちは美味しいお菓子を通して、人がお互いに信頼しあい、生活が豊かになるよう、地域社会に貢献することを使命・目的としています。 また、人気職種であるパティシエの地位向上、労働環境の改善、夢の実現（雇用創出）に貢献すること、つまり「子どもの夢を叶える」ことを目指しています。</p>
                    <ul class="list-unstyled footer-link d-flex footer-social">
                      <li><a href="#" class="p-2"><span class="fa fa-twitter"></span></a></li>
                      <li><a href="https://www.facebook.com/%E3%83%91%E3%83%86%E3%82%A3%E3%82%B9%E3%83%AA%E3%83%BC%E3%83%A9%E3%83%9D%E3%83%BC%E3%83%AB-642798122467031/" class="p-2"><span class="fa fa-facebook"></span></a></li>
                      <li><a href="#" class="p-2"><span class="fa fa-linkedin"></span></a></li>
                      <li><a href="#" class="p-2"><span class="fa fa-instagram"></span></a></li>
                    </ul>
          
                  </div>
                  <div class="col-md-5 mb-5">
                    <div class="mb-5">
                      <h3>Opening Hours</h3>
                      <p><strong class="d-block">Sunday-Thursday</strong> 5AM - 10PM</p>
                    </div>
                    <div>
                      <h3>Contact Info</h3>
                      <ul class="list-unstyled footer-link">
                        <li class="d-block">
                          <span class="d-block">Address:</span>
                          <span class="text-white">愛媛県松山市来住町1394-1</span></li>
                        <li class="d-block"><span class="d-block">Telephone:</span><span class="text-white">089-916-5922</span>
                        </li>
                        <li class="d-block"><span class="d-block">Email:</span><span class="text-white">info@yourdomain.com</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-md-3 mb-5">
                    <h3>Quick Links</h3>
                    <ul class="list-unstyled footer-link">
                      <li><a href="{$str2}index.php">HOME</a></li>
                      <li><a href="{$str}company.php">COMPANY</a></li>
                      <li><a href="{$str}shop.php">SHOP</a></li>
                      <li><a href="{$str}concept.php">CONSEPT</a></li>
                      <li><a href="{$str}https://recruit-rapport.com/">RECRUIT</a></li>
                      <li><a href="{$str}cake.php">CAKE</a></li>
                      <li><a href="{$str}about.php">ABOUT</a></li>
                      <li><a href="{$str}order.php">ORDER</a></li>
                      <li><a href="{$str}contact.php">CONTACT</a></li>
                    </ul>
                  </div>
                  <div class="col-md-3">
          
                  </div>
                </div>
                <div class="row">
                  <div class="col-12 text-md-center text-left">
                    <p>
                      Copyright &copy;
                      <script>document.write(new Date().getFullYear());</script> All rights reserved | This webpages is made by campnet
                      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                  </div>
                </div>
              </div>
             
             
            
EOF;

    
        }//function END
    }//class END


?>