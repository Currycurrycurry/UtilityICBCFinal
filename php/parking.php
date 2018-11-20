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
									<h1>Come Parking<br />
										自助停车</h1>
									<p>Come Parking提供在线选车位，在线引导泊车，在线支付费用服务，让您的爱车不再无处安放!</p>
								</header>
                                <div id="mapG" style="z-index:999;height:500px;weight:500px">

                                </div>
                                <br>
                                <!--<a href="#" class="image main"><img src="../images/bg.jpg" alt="" /></a>-->
                                <ul class="actions special">
                                    <li><a class="button large" onclick="searchParking();">周边停车场一键搜寻</a></li>
                                    <li><a href="parking.php#register" class="button large">新用户立减20元</a></li>
                                </ul>


							</section>

					</div>

				<!-- Footer -->
					<footer id="footer">
						<section>
							<form method="post" action="parkingRegister.php">
								<div class="fields">
                                    <a name="register"><h2>Register成为新用户</h2></a>
									<div class="field">
										<label for="name">真实姓名Name</label>
										<input type="text" name="name" id="name" placeholder="示例：王晓宁" />
									</div>
									<div class="field">
										<label for="text">绑定车牌号License Number</label>
										<input type="text" name="email" id="carNumebr" />
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
							<section>
								<h3>Social</h3>
								<ul class="icons alt">
									<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
								</ul>
							</section>
						</section>
					</footer>

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


	</body>
</html>