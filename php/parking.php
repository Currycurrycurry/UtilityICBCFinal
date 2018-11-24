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

                <!--充值弹窗-->
                <div id="rechargePart" style="z-index: 99999;">
                    <div class="RoverCurtain"></div>
                    <div class="Rhide-center">
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
                                    <a name="register"><h2>Register成为会员</h2></a>
									<div class="field">
										<label for="cardNumber">卡号Card Number</label>
										<input type="text" name="cardNumber" id="cardNumber" placeholder="请输入16位数字：" />
									</div>
									<div class="field">
										<label for="text">车牌识别License Number</label>

                                            <input type="file" name="file_upload" onchange="uploadImg(this);"/>
                                            <a id="buttonForLicense" class="button small">点击进行识别</a>
                                            <input type="text" id="carNumebr" placeholder="示例：沪B1234567" name="carLicense"/>
									</div>
									<div class="field">
										<label for="password">支付密码password  <a href="xiaoemianmi.php">开启小额免密支付</a></label>

                                        <input type="password" name="password" id="password" />
									</div>
								</div>
								<ul class="actions">
									<li><input type="submit" value="开通包月服务" /></li>

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
                    <ul><li>&copy; Utility for ICBC</li><li>Design: <a href="#">FDU team</a></li></ul>
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
                function uploadImg(obj){
                    var img = document.getElementById("img");
                    var file = obj.files[0];
                    console.log(obj);
                    console.log(file);
                    console.log("file.size="+file.size);

                    var reader = new FileReader();

                    //读取文件的过程
                    reader.onloadstart = function (e) {
                        console.log("start");
                    };
                    reader.onprogress = function(e){
                        console.log("ing")
                    };
                    reader.onabort = function(e){
                        console.log("abort");
                    };
                    reader.onerror = function(e){
                        console.log("exception");
                    };
                    reader.onload = function (ev) {
                        console.log("success");
                        img.src = this.result;
                    };
                    reader.readAsDataURL(file);
                }

                $("#buttonForLicense").click(function(){
                    $("#carNumebr").attr("value","京A12313");
                    // var newTxt = '<input type="text" id="carNumebr" placeholder="示例：沪B1234567" name="carLicense"/>';

                    //var txt = "   <p>识别结果：京A12313</p>";
                   $(this).after(newTxt);


                });

            </script>



	</body>
</html>