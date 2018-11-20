<!DOCTYPE HTML>
<html>
<head>
    <title>details for sample Family Store</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
</head>
<body class="is-preload">

<!-- Wrapper -->
<div id="wrapper">

    <!-- Header -->
    <header id="header">
        <a href="index.php" class="logo">Utilities</a>
    </header>

    <!-- Nav -->
    <nav id="nav">
        <ul class="links">
            <li><a href="index.php">Return返回首页</a></li>
<!--            <li><a href="#">85°C面包店</a></li>-->
            <li><a href="#">AJISEN RAMEN味千拉面</a></li>
            <li><a href="#">ÉPOQUE波奇四季</a></li>
            <li class="active"><a href="details.php">Family全家</a></li>
        </ul>
        <?php include "createNav.php" ?>
    </nav>

    <!-- Main -->
    <div id="main">

        <!-- Post -->
        <section class="post">
            <header class="major">
                <h1>Family<br />
                    全家</h1>
            </header>

            <!-- Text stuff -->

            <span class="image fit"><img src="../images/familybg.jpg" alt="" /></span>
            <p>
                Payments加入群支付功能，与生物识别技术一起，让您在便捷支付的同时体验生活的温暖!现在开启自助生活缴费，与工行卡绑定，更享8.8折优惠！
            </p>

            <ul class="actions special">
                <li><a href="#" class="button large">开通自助缴费服务</a></li>
            </ul>


            <h3>水电煤缴费</h3>
            <ul class="actions">
                <li><a href="#" class="button primary">水费</a></li>
                <li><a href="#" class="button">电费</a></li>
                <li><a href="#" class="button primary">煤气费</a></li>
            </ul>

            <div class="row">
                <div class="col-6 col-12-small">
                    <ul class="actions stacked">
                        <li><a href="#" class="button primary fit">开通群支付功能</a></li>
                        <li><a href="#" class="button fit">了解生物识别技术</a></li>
                    </ul>
                </div>

            </div>

            <hr />

            <!-- Footer Regsster -->
            <footer id="footer">
                <section>
                    <form method="post" action="#">
                        <div class="fields">
                            <div class="field">
                                <label for="name">姓名Name</label>
                                <input type="text" name="name" id="name" placeholder="王晓宁" />
                            </div>

                            <div class="field">
                                <label for="password">支付密码password  <a onclick="alert('小额免密协议');">开启小额免密支付</a></label>

                                <input type="password" name="password" id="password" />
                            </div>
                        </div>
                        <ul class="actions">
                            <li><input type="submit" value="开通服务" /></li>

                        </ul>
                    </form>
                </section>
                <section class="split contact">
                    <section class="alt">
                        <h3>Address</h3>
                        <p>1234 Somewhere Road #87257<br />
                            Nashville, TN 00000-0000</p>
                    </section>
                    <section>
                        <h3>Phone</h3>
                        <p><a href="#">(000) 000-0000</a></p>
                    </section>
                    <section>
                        <h3>Email</h3>
                        <p><a href="#">info@untitled.tld</a></p>
                    </section>

                </section>
            </footer>

            <!-- Copyright -->
            <div id="copyright">
                <ul><li>&copy; Utility for ICBC</li><li>Design: <a href="#">FDU team</a></li></ul>
            </div>

    </div>

    <!-- Scripts -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/jquery.scrollex.min.js"></script>
    <script src="../assets/js/jquery.scrolly.min.js"></script>
    <script src="../assets/js/browser.min.js"></script>
    <script src="../assets/js/breakpoints.min.js"></script>
    <script src="../assets/js/util.js"></script>
    <script src="../assets/js/main.js"></script>

</body>
</html>