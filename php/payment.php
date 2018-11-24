<!DOCTYPE HTML>
<html>
	<head>
		<title>daily life payment</title>
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
							<li><a href="index.php">Goods跑腿代购</a></li>
							<li><a href="parking.php">Come Parking自助停车</a></li>
							<li class="active"><a href="payment.php">Payments生活缴费</a></li>
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
									<h1>Payments<br />
										生活缴费</h1>
								</header>

								<!-- Text stuff -->
								<p>
									Payments加入群支付功能，与生物识别技术一起，让您在便捷支付的同时体验生活的温暖!现在开启自助生活缴费，与工行卡绑定，更享8.8折优惠！
								</p>

                                <ul class="actions special">
                                    <li><a href="payment.php#register" class="button large">开通自助缴费服务</a></li>
                                </ul>


									<h3>水电煤缴费</h3>
									<ul class="actions">
										<li><a href="" class="button primary">水费</a></li>
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

                                <!-- Footer -->
                                <footer id="footer">
                                    <section>
                                        <form method="post" action="#">
                                            <div class="fields">
                                                <a name="register"><h2>Register开通服务</h2></a>
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