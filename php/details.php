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

        <!--登陆-->
        <div id="loginPart">
            <div class="overCurtain"></div>
            <div class="hide-center" style="border-style: solid;border-width: thick;">
                <div id="formhead">
                    <!--                            <button type="button" id="close">X</button>-->
                    <a href="#" id="close" class="icon alt fa-close" style="color:black;size: 10px;"><span class="label">微信Wechat</span></a>
                    <h3 id="signIn" style="margin: 0 auto;display: inline;">登陆Log In</h3>
                    <br><hr>
                </div>
                <form id="formbody" method = "post" action = 'login.php'>
                    <div class="loginUserName">
                        <input id="input-topright-loginInput" name="userName" class="loginInput" placeholder="userName" type="text" value="admin">
                    </div>
                    <div class="loginPassword">
                        <input id="input-bottomright-loginInput" name="password" class="loginInput" placeholder="password" type="password" style="border-bottom-right-radius:5px;">
                    </div>
                    <div id="formfoot">
                        <a href="login.php" type="submit" style="padding-left:8px;padding-right:8px; padding-top: 2px;padding-bottom: 2px;" class="button large">Sign In </a>
                    </div>
                </form>
            </div>
        </div>




        <!--                充值弹窗-->
        <!--                width:100%;height:600px;-->
        <div id="rechargePart" style="">
            <div class="RoverCurtain"></div>
            <div class="Rhide-center" style="border: solid;border-width: thick;">
                <form id="Rformhead" method="post" action = 'PayForParking.php'>
                    <button type="button" id="Rclose">X</button>
                    <p id="reCharge" style="margin: 0 auto;display: inline;">充值Recharge</p><br/>

                    请输入充值金额：<input type = "text"height="30px" width="120px" name = "amount" value = '100'/>
                    <br><hr>
                </form>
                <div id="Rformbody">
                    <!--                           <img src="../images/bread.png">-->
                    <video height="120px" autoplay="autoplay"></video><br/>
                    <canvas id="canvas1" height="120px" ></canvas><hr />
                    <input type="button" title="拍照" value="支付" onclick="getPhoto();alert('支付成功！');" />
                </div>
            </div>
        </div>


        <!-- Image -->
        <header class="major">
            <h1>Family<br />
                全家</h1>
        </header>
        <span class="image fit"><img src="../images/familybg.jpg" alt="" /></span>
        <div class="box alt">
            <div class="row gtr-50 gtr-uniform">
                <div class="col-4"><span class="image fit"><img style="width:250px;height:200px;" src="../images/pic02.jpg" alt="" /><label>￥<a href="#" class="icon fa-plus"></a></label><a href="#" class="button small">第二份1.8折</a></span></div>
                <div class="col-4"><span class="image fit"><img style="width:250px;height:200px;" src="../images/pic03.jpg" alt="" /></span></div>
                <div class="col-4"><span class="image fit"><img style="width:250px;height:200px;" src="../images/pic04.jpg" alt="" /></span></div>
                <!-- Break -->
                <div class="col-4"><span class="image fit"><img style="width:250px;height:200px;" src="../images/pic04.jpg" alt="" /></span></div>
                <div class="col-4"><span class="image fit"><img style="width:250px;height:200px;" src="../images/pic02.jpg" alt="" /></span></div>
                <div class="col-4"><span class="image fit"><img style="width:250px;height:200px;" src="../images/pic03.jpg" alt="" /></span></div>
                <!-- Break -->
                <div class="col-4"><span class="image fit"><img style="width:250px;height:200px;" src="../images/pic03.jpg" alt="" /></span></div>
                <div class="col-4"><span class="image fit"><img style="width:250px;height:200px;" src="../images/pic04.jpg" alt="" /></span></div>
                <div class="col-4"><span class="image fit"><img style="width:250px;height:200px;" src="../images/pic02.jpg" alt="" /></span></div>
            </div>
        </div>

        <h3>Left &amp; Right</h3>
        <p><span class="image left"><img src="../images/pic08.jpg" alt="" /></span>Lorem ipsum dolor sit accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Vestibulum ante ipsum primis in faucibus magna blandit adipiscing eu felis iaculis.</p>
        <p><span class="image right"><img src="../images/pic09.jpg" alt="" /></span>Lorem ipsum dolor sit accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Vestibulum ante ipsum primis in faucibus magna blandit adipiscing eu felis iaculis.</p>

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
    <script src="../assets/js/loginPop.js"></script>
</body>
</html>