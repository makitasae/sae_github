<?php

include("../cls/CommonHtml.php");
$ComHtml = new CommonHtml();

?>

<?php
if ($_GET['cake_no'] == 1) {
    $cake_file = "cake_image01.jpg";
}
if ($_GET['cake_no'] == 2) {
    $cake_file = "cake_image02.jpg";
}
if ($_GET['cake_no'] == 3) {
    $cake_file = "cake_image03.jpg";
}
if ($_GET['cake_no'] == 4) {
    $cake_file = "cake_image04.jpg";
}
if ($_GET['cake_no'] == 5) {
    $cake_file = "cake_image05.jpg";
}
if ($_GET['cake_no'] == 6) {
    $cake_file = "cake_image06.jpg";
}
?>


<!doctype html>
<html lang="ja">

<head>
    <?php echo $ComHtml->_Html_Head(2); ?>
    <script type="text/javascript">
    // url関係
    var url = new URL(window.location.href);
    var params = url.searchParams;
    // get送信された情報の取得
    var cake_no = params.get('cake_no');
    // console.log(params.get('cake_no'));


    // ケーキサイズと値段のテーブル
    var cake_size_list = {
        1: {
            "3号": 2527,
            "4号": 3218,
            "5号": 4126,
            "6号": 5530
        },
        2: {
            "3号": 2614,
            "4号": 3326,
            "5号": 4223,
            "6号": 5638
        },
        3: {
            "3号": 2527,
            "4号": 3218,
            "5号": 4126,
            "6号": 5530
        },
        4: {
            "3号": 2322,
            "4号": 3024,
            "5号": 4126,
        },
        5: {
            "3号": 2527,
            "4号": 3218,
            "5号": 4126,
            "6号": 5530
        },
    }

    // 選択されたケーキとサイズ
    var size_list = cake_size_list[cake_no];
    // var size_list = {"3号":2527, "4号":3218, "5号":4126, "6号":5530};

    // オプションの値段テーブル
    var opt_list = {
        "オプションを選択してください": 0,
        "ろうそく": 500,
        "プレート": 1000,
        "チョコクリームへの変更": 500
    };
    var opt_already = ["", "", ""]; // 選択されたオプション（オプションを重ねないため
    var cake_value = 0; //ケーキの価格
    var opt_value = [0, 0, 0]; //オプションの価格
    var total_value = 0; //合計金額

    //　ケーキの名前テーブル
    var name_list = {
        1: '２段ケーキ',
        2: 'いちごとブルーベリーのデコレーション',
        3: 'いちごデコレーション',
        4: 'ガトーショコラ',
        5: 'ショコラ',
        6: 'スクエアケーキ'
    }
    var name_list = name_list[cake_no];

    // console.log(name_list);

    // このページがロードし終わったら呼び出される関数
    function load() {
        // ケーキサイズのプルダウンメニューを動的につくる
        var element = document.getElementById('cake_size');
        // console.log(element);

        for (key in size_list) {
            var option = document.createElement("option");
            option.text = key + "：" + size_list[key].toLocaleString() + "円";
            option.value = key;
            element.appendChild(option);
        }
        element.options[0].selected = true;
        cake_value = element.options[0].value;
        inputCakeSizeChange();

        var element = document.getElementById('option1');
        for (key in opt_list) {
            var option = document.createElement('option');
            option.text = key + "：" + opt_list[key].toLocaleString() + "円";
            option.value = key;
            element.appendChild(option);
        }
        var cake_name_html = document.getElementById('cake_name');
        // console.log(cake_name_html.textContent);
        cake_name_html.textContent = name_list;
    }
    window.onload = load;



    // ケーキサイズ変更
    function inputCakeSizeChange() {
        var span_ch = "　　　　　　　　";
        var cake_name = "いちごケーキ";

        var element = document.getElementById('cake_size');
        var cake_size = element.value;
        var cake_html = document.getElementById('cake_size_html');
        cake_html.innerHTML = '<td>' + cake_name + '（' + cake_size + '）' + span_ch + '</td>';
        cake_html.innerHTML += '<td>' + size_list[cake_size].toLocaleString() + '円</td>';
        cake_value = size_list[cake_size]
        calcTotalValue()
    }

    // オプション変更
    function inputOptionChange(number) {
        var element = document.getElementById('option' + number);
        var opt_name = element.value;
        var opt_html = document.getElementById('opt' + number + '_value_html');
        opt_html.innerHTML = '<td>' + opt_name + '</td><td>' + opt_list[opt_name] + '円</td>';
        opt_value[number] = opt_list[opt_name]
        calcTotalValue()
    }

    function calcTotalValue() {
        total_value = cake_value
        for (i = 0; i < opt_value.length; i++) {
            total_value += opt_value[i]
        }
        var total_html = document.getElementById('total_value_html')
        total_html.innerHTML = '<td>' + total_value + '円</td>'
    }
    </script>
</head>

<body>

    <header role="banner">
        <?php echo $ComHtml->_Html_Header(2); ?>
    </header> <!-- END header -->

    <div class="bg-clear"></div>
    <section class="home-slider-loop-false  inner-page owl-carousel">
        <div class="slider-item" style="background-image: url('../sample/image04.jpg');">

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
        <div class="clearfix mb-5 pb-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 text-center heading-wrap">
                        <h2>order<br> &emsp; </h2>
                        <span class="back-text">order</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pl-2 pl-lg-5">

                    <div class="col-md-8 mx-auto contact-form-contact-info">
                        <!-- <h4 class="mb-5">Contact Details</h4>
            <p class="d-flex">
              <span class="ion-ios-location icon mr-5"></span>
              <span>34 Street Name, City Name Here, United States</span>
            </p>-->

                        <p class="d-flex">
                            <!-- <span class="ion-ios-telephone icon mr-5"></span> -->
                            <span>＜現在選択中の商品＞</span>
                        </p>

                        <p class="d-flex">
                        <div>
                            <!-- <span class="ion-ios-telephone icon mr-5"></span> -->
                            <span id="cake_name">ここに商品名が入ります</span>
                        </div>
                        </p>

                        <p></p>
                        <p class="d-flex">
                            <!-- <span class="ion-android-mail icon mr-5"></span> -->
                            <!-- <span>info@yourdomain.com</span> -->
                            <img style="width:100%; height:100%;" src="../images/<?php echo  $cake_file; ?>" alt=""><br>

                        </p>

                    </div>

                    <div class="col-lg-12">
                        <form action="#" method="post">

                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <table>
                                        <tr>
                                            <div id="cake_size_html">
                                                <!--
                            <td>****ケーキ(**号)　　　　　　　　</td>
                            <td>00000円</td>
                            //-->
                                            </div>
                                        </tr>
                                        <tr>
                                            <div id="opt1_value_html">
                                                <!-- 
                            <td>オプション名１                </td>
                            <td>00000円</td> 
                            //-->
                                            </div>
                                        </tr>
                                        <tr>
                                            <div id="opt2_value_html">
                                                <!-- <td>オプション名２</td>
                            <td>00000円</td> -->
                                            </div>
                                        </tr>
                                        <tr>
                                            <div id="opt3_value_html">
                                                <!-- <td>オプション名３</td>
                            <td>00000円</td> -->
                                            </div>
                                        </tr>
                                        <tr>
                                            <div id="total_value_html">
                                                <!--
                            <td>合計</td>
                            <td>00000円</td>
                          //-->
                                            </div>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                    </div>

                </div>


                <div class="col-lg-6">
                    <form action="#" method="post">

                        <div class="row">
                            <p>＜商品・受け取り情報＞</p>
                            <div class="col-md-12 form-group">
                                <label for="phone">受取希望時間</label>
                                <input type="time" id="phone" class="form-control " value="時間を入力してください">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="size">ケーキサイズ</label>
                                <select id="cake_size" class="form-control" style="height: 3.5rem;"
                                    onchange="inputCakeSizeChange()">
                                    <!--
                  <option value="なし">サイズを選択してください</option>
                  <option value="3号">3号 2,527円</option>
                  <option value="4号">4号 3,218円</option>
                  <option value="5号">5号 4,126円</option>
                  <option value="6号">6号 5,530円</option>
                  //-->
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="option">オプション</label>
                                <select id="option1" class="form-control" style="height: 3.5rem;"
                                    onchange="inputOptionChange(1)">
                                    <!--
                  <option value="なし">オプションを選択してください</option>
                  <option value="ろうそく">ろうそく</option>
                  <option value="プレート">プレート</option>
                  <option value="チョコクリームへの変更">チョコクリームへの変更</option>
                  //-->
                                </select>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="option">オプション</label>
                                <select id="option2" class="form-control" style="height: 3.5rem;"
                                    onchange="inputOptionChange(2)">
                                    <option value="なし">オプションを選択してください</option>
                                    <option value="ろうそく">ろうそく</option>
                                    <option value="プレート">プレート</option>
                                    <option value="チョコクリームへの変更">チョコクリームへの変更</option>
                                </select>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="option">オプション</label>
                                <select id="option3" class="form-control" style="height: 3.5rem;"
                                    onchange="inputOptionChange(3)">
                                    <option value="なし">オプションを選択してください</option>
                                    <option value="ろうそく">ろうそく</option>
                                    <option value="プレート">プレート</option>
                                    <option value="チョコクリームへの変更">チョコクリームへの変更</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="phone">メッセージ</label>
                                <input type="text" id="phone" class="form-control" 　value="メッセージを入力してください">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="message">備考欄</label>
                                <textarea name="message" id="message" class="form-control " cols="30" rows="8"
                                    placeholder="その他何かございましたらご入力ください"></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <p>＜ご購入様情報＞</p>
                            <div class="col-md-12 form-group">
                                <label for="name">おなまえ(カナ)</label>
                                <input type="text" id="name" class="form-control " placeholder="お名前を入力してください">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="phone">お電話番号</label>
                                <input type="tel" id="phone" class="form-control " placeholder="電話番号を入力してください">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="email">メールアドレス</label>
                                <input type="email" id="email" class="form-control " placeholder="メールアドレスを入力してください">
                            </div>
                        </div>

                        <div class="button-radio">
                            <input id="bar1" type="radio" name="foo" value="bar1" checked>
                            <label for="bar1">男性</label>
                            <input id="bar2" type="radio" name="foo" value="bar2">
                            <label for="bar2">女性</label>
                        </div>

                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="yuubin">お住まい</label>
                                <input type="text" id="post" class="form-control" placeholder="郵便番号">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="yuubin">　</label>
                                <input type="text" id="post" class="form-control" placeholder="都道府県">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" id="post" class="form-control" placeholder="市町村区以下を入力">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="know">知った経緯</label>
                                <select id="know" class="form-control" style="height: 3.5rem;">
                                    <option hidden>選択してください</option>
                                    <option>紹介</option>
                                    <option>ネット</option>
                                    <option>テレビ</option>
                                    <option>SNS</option>
                                    <option>フリーペーパー</option>
                                    <option>その他</option>
                                </select>
                            </div>
                        </div>


                    </form>
                </div>

                <div class="row">
                    <div class="col-md-6 form-group">
                        <input type="button" value="決済へ進む" onclick="location.href='../pages/order_credit.php'"
                            class="btn btn-primary" float: right;>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 form-group">
                        <button type="button" onclick="history.back();" class="btn btn-primary" margin-left:
                            auto;>戻る</button>
                        <!-- <input type="submit" value="戻る" class="btn btn-primary"> -->
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