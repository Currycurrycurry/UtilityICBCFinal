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

				<!-- Main -->
					<div id="main">

						<!-- Post -->
							<section class="post">
								<header class="major">
									<span class="date">April 25, 2017</span>
									<h1>Come Parking<br />
										自助停车</h1>
									<p>Come Parking提供在线选车位，在线引导泊车，在线支付费用服务，让您的爱车不再无处安放!</p>
								</header>
                                <div id="mapG" style="z-index:999;height:500px;weight:500px">

                                </div>
                                <br>
                                <!--<a href="#" class="image main"><img src="../images/bg.jpg" alt="" /></a>-->
                                <ul class="actions special">
                                    <li><a href="#" class="button large">周边停车场一键搜寻</a></li>
                                    <li><a href="#" class="button large">新用户立减20元</a></li>
                                </ul>


							</section>

					</div>

				<!-- Footer -->
					<footer id="footer">
						<section>
							<form method="post" action="parkingRegister.php">
								<div class="fields">
									<div class="field">
										<label for="name">姓名Name</label>
										<input type="text" name="name" id="name" placeholder="王晓宁" />
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

		<!-- Scripts -->
            <script type="text/javascript">
                // 百度地图API功能
                var map = new BMap.Map("mapG");    // 创建Map实例
                map.centerAndZoom(new BMap.Point(121.404, 31.915), 13);  // 初始化地图,设置中心点坐标和地图级别
                //添加地图类型控件
                map.addControl(new BMap.MapTypeControl({
                    mapTypes:[
                        BMAP_NORMAL_MAP,
                        BMAP_HYBRID_MAP
                    ]}));
                map.setCurrentCity("上海");          // 设置地图显示的城市 此项是必须设置的
                map.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放
            </script>
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/jquery.scrollex.min.js"></script>
			<script src="../assets/js/jquery.scrolly.min.js"></script>
			<script src="../assets/js/browser.min.js"></script>
			<script src="../assets/js/breakpoints.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>

	</body>
</html>