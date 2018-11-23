
<!DOCTYPE HTML>
<html>
	<head>
		<title>daily life payment</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../assets/css/main.css" />
		<noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
        <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=MYAca1431R5bDDw1fRqNmzXorZ40YrFf"></script>
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
							<li><a href="index.php">Goods跑腿代购</a></li>
							<li class="active"><a href="parking.php">Come Parking自助停车</a></li>
							<li><a href="payment.php">Payments生活缴费</a></li>
						</ul>
						<?php include "createNav.php" ?>
					</nav>
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






                <!-- Main -->
					<div id="main">

						<!-- Post -->
							<section class="post">
								<header class="major">
									<span class="date"><?php
                                        echo " " . date("Y/m/d") . "<br>";
                                        ?></span>
									<h1>Parking Choosing<br />
										车位选择</h1>
									<p>Come Parking提供在线选车位，在线引导泊车，在线支付费用服务，让您的爱车不再无处安放!</p>
								</header>


                                <h3>您的车牌号是：<?php echo $_SESSION["carLicnese"];?></h3>
                                <h3>已为您自动匹配最近停车场：停车场(建材城富力桃园A区南)</h3>
                                <h2>车位显示</h2>
                                <ul class="actions">
                                    <h4>A区：</h4>
                                    <li><a class="button primary">已占occupied</a></li>
                                    <li><a class="button primary">已占occupied</a></li>
                                    <li><a class="vacancy button">空闲 vacancy</a></li>
                                    <li><a class="button primary">已占occupied</a></li>
                                </ul>
                                <ul class="actions">
                                    <h4>B区：</h4>
                                    <li><a class="button primary">已占occupied</a></li>
                                    <li><a class="button primary">已占occupied</a></li>
                                    <li><a class="vacancy button">空闲 vacancy</a></li>
                                    <li><a class="vacancy button">空闲 vacancy</a></li>
                                </ul>
                                <ul class="actions">
                                    <h4>C区：</h4>
                                    <li><a class="button primary">已占occupied</a></li>
                                    <li><a class="vacancy button">空闲 vacancy</a></li>
                                    <li><a class="vacancy button">空闲 vacancy</a></li>
                                    <li><a class="vacancy button">空闲 vacancy</a></li>
                                </ul>
                                <ul class="actions">
                                    <h4>D区：</h4>
                                    <li><a class="button primary">已占occupied</a></li>
                                    <li><a class="vacancy button">空闲 vacancy</a></li>
                                    <li><a class="vacancy button">空闲 vacancy</a></li>
                                    <li><a class="vacancy button">空闲 vacancy</a></li>
                                </ul>
                                <ul class="actions">
                                    <h4>E区：</h4>
                                    <li><a class="button primary">已占occupied</a></li>
                                    <li><a class="vacancy button">空闲 vacancy</a></li>
                                    <li><a class="vacancy button">空闲 vacancy</a></li>
                                    <li><a class="vacancy button">空闲 vacancy</a></li>
                                </ul>
                                <ul class="actions">
                                    <h4>F区：</h4>
                                    <li><a class="vacancy button">空闲 vacant</a></li>
                                    <li><a class="vacancy button">空闲 vacant</a></li>
                                    <li><a class="button primary">已占occupied</a></li>
                                    <li><a class="vacancy button">空闲 vacant</a></li>
                                </ul>



                                <ul class="actions special">
                                    <li><a class="button large" onclick="searchParking();">自动锁定最近车位</a></li>

                                </ul>
                                <!--<a href="#" class="image main"><img src="../images/bg.jpg" alt="" /></a>-->

							</section>

					</div>

				<!-- Copyright -->
					<div id="copyright">
						<ul><li>&copy; Untitled</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li></ul>
					</div>

			</div>

			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/jquery.scrollex.min.js"></script>
			<script src="../assets/js/jquery.scrolly.min.js"></script>
			<script src="../assets/js/browser.min.js"></script>
			<script src="../assets/js/breakpoints.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>
            <script src="../assets/js/map.js"></script>
             <script src="../assets/js/loginPop.js"></script>
    <script>
        $(".vacancy").click(
            function(){
                alert("预定成功！");
                var txt = "<li><a class='button primary'>已占occupied</a></li>";
                $(this).after(txt);
                $(this).hide();
            }
        );



    </script>


	</body>
</html>