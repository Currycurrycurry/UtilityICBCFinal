<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/html">
	<head>
		<title>Utilities for ICBC</title>
        <style>
            .mask{width: 100%;height: 100%;background:#000;position: absolute;top: 0px;left:0px;opacity: 0.4;z-index: 8000; display: none;-moz-user-select: none; -webkit-user-select: none;}
            .dialog{border:solid;width: 300px;background:#fff; position: absolute;z-index: 9000;padding-bottom: 10px; display: none;-moz-user-select: none; -webkit-user-select: none;}
            .dialog_head{width: 100%;height:50px;background:#4B4B4B;text-align: center;line-height: 50px;color: #eee; cursor: move;}
            .dialog_content{width: 100%;height:140px;}

            .mask2{width: 100%;height: 100%;background:#000;position: absolute;top: 0px;left:0px;opacity: 0.4;z-index: 8000; display: none;-moz-user-select: none; -webkit-user-select: none;}
            .dialog2{border:solid;width: 300px;background:#fff; position: absolute;z-index: 9000;padding-bottom: 10px; display: none;-moz-user-select: none; -webkit-user-select: none;}
            .dialog_head2{width: 100%;height:50px;background:#4B4B4B;text-align: center;line-height: 50px;color: #eee; cursor: move;}
            .dialog_content2{width: 100%;height:500px;}
        </style>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../assets/css/main.css" />
		<noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
		<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=MYAca1431R5bDDw1fRqNmzXorZ40YrFf"></script>
	</head>

	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper" class="fade-in">

				<!-- Intro -->
					<div id="intro">
						<h1>Utilities<br />
						智能生活助手</h1>
						<p>基于工行平台的<br />
							一站式生活便民服务网站</p>
						<ul class="actions">
							<li><a href="#header" class="button icon solo fa-arrow-down scrolly">Continue</a></li>
						</ul>
					</div>

				<!-- Header -->
					<header id="header">
						<a href="index.php" class="logo">Utilities</a>
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul class="links">
							<li class="active"><a href="index.php">Goods跑腿代购</a></li>
							<li><a href="parking.php">Come Parking自助停车</a></li>
							<li><a href="payment.php">Payments生活缴费</a></li>
						</ul>

                        <?php include "createNav.php" ?>
                    </nav>

<!--                充值弹窗-->

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


<!--            register-->
                <div id="mask" class="mask"></div>
                <div class="dialog" id="dialog">

                    <div class="dialog_head" id="move_part">登陆Log In</div>
                    <div class="dialog_content">
                        <form id="formbody" method = "post" action = 'login.php'>
                            <div class="loginUserName">
                                <input id="input-topright-loginInput" name="userName" class="loginInput" placeholder="userName" type="text" value="admin">
                            </div>
                            <div class="loginPassword">
                                <input id="input-bottomright-loginInput" name="password" class="loginInput" placeholder="password" type="password" style="border-bottom-right-radius:5px;">
                            </div>
                            <div id="formfoot" style="margin:2px 2px 2px 2px;">
                                <a href="login.php" type="submit"  class="button small">Sign In </a>
                                <div class="button small" id="close2333"> <a id="close">返回首页</a>

                            </div>
                        </form>
                    </div>

                    </div>

<!--                充值-->
<!--                <div id="mask2" class="mask2"></div>-->
<!--                <div class="dialog2" id="dialog2">-->
<!---->
<!--                    <div class="dialog_head2" id="move_part2">充值Recharge</div>-->
<!--                    <div class="dialog_content2">-->
<!--                        <form id="Rformhead" method="post" action = 'PayForParking.php'>-->
<!--                            <button type="button" id="Rclose">X</button>-->
<!--                            <p id="reCharge" style="margin: 0 auto;display: inline;">充值Recharge</p><br/>-->
<!---->
<!--                            请输入充值金额：<input type = "text"height="30px" width="120px" name = "amount" value = '100'/>-->
<!--                            <br><hr>-->
<!--                        </form>-->
<!--                        <div id="Rformbody">-->
<!--                            <video height="120px" autoplay="autoplay"></video><br/>-->
<!--                            <canvas id="canvas1" height="120px" ></canvas><hr />-->
<!--                            <input type="button" title="拍照" value="支付" onclick="getPhoto();alert('支付成功！');" />-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    </div>-->


            </div>

                <div id="main">

						<!-- Featured Post -->
							<article class="post featured">
								<header class="major">
									<span class="date"><?php
                                        echo " " . date("Y/m/d") . "<br>";
                                        ?></span>
									<h2><a href="#">Goods<br />
										跑腿代购</a></h2>
									<p>是否曾经在停车场内为了寻找车位而苦苦兜圈？是否曾经在便利店里为了生活缴费而无聊等待？
										是否曾经在
										在这里，对一切生活的繁琐say no！我们基于工行平台，打造一站式生活便民服务网站——Utilities生活助手。
										Goods为您节省大量时间，让您更自由地支配生活!
									</p>
								</header>

								<!-- ！！！！Map -->
								<div id="mapG" style="z-index:999;height:500px;weight:500px">
                                    <div id="r-result" style="z-index:999;height:500px;weight:500px"></div>

								</div>
								<!--<a href="#" class="image main"><img src="../images/bg.jpg" alt="" /></a>-->
								<ul class="actions special">
									<li><a class="button large" onclick="searchAround();">查找周边</a></li>
								</ul>
							</article>

						<!-- Posts -->
							<section class="posts">
								<article>
									<header>
										<span class="date">入驻商家</span>
										<h2><a href="#">全家便利店
										</a></h2>
									</header>
									<a href="#" class="image fit"><img src="../images/market.png" width="1200px" height="300px" alt="" /></a>
									<p>  全家（国定路店）位于五角场街道国定东路285号，是一家主要负责食品、日用品的销售的多功能便利店。
                                    </p>
									<ul class="actions special">
										<li><a href="details.php" class="button">超市便利</a></li>
									</ul>
								</article>
								<article>
									<header>
										<span class="date">入驻商家</span>
										<h2><a href="#">许鲜水果店</a></h2>
									</header>
									<a href="#" class="image fit"><img src="../images/vegetable.png" width="1200px" height="300px" alt="" /></a>
									<p>许鲜水果店（五角场店）位于国痒路85号，坚持服务至上的理念，每日给顾客带来最新鲜的水果。
                                    </p>
									<ul class="actions special">
										<li><a href="#" class="button">新鲜果蔬</a></li>
									</ul>
								</article>
								<article>
									<header>
										<span class="date">入驻商家</span>
										<h2><a href="#">85°C
										</a></h2>
									</header>
									<a href="#" class="image fit"><img src="../images/bread.png" width="1200px" height="300px" alt="" /></a>
									<p>85°C（三号湾店）位于国定路333号三号湾广场1楼，主要经营咖啡和甜点，希望产品呈现给顾客的是最优质质量、最美味和超值。
                                    </p>
									<ul class="actions special">
										<li><a href="#" class="button">烘培蛋糕</a></li>
									</ul>
								</article>
								<article>
									<header>
										<span class="date">入驻商家</span>
										<h2><a href="#">味千拉面</a></h2>
									</header>
									<a href="#" class="image fit"><img src="../images/food.png" width="1200px" height="300px" alt="" /></a>
									<p>味千拉面（三号湾店）位于国定路333号三号湾F102号，是从日本引进的餐饮品牌，主打面食。其招牌猪软骨春笋拉面也跻身网红美食。
                                    </p>
									<ul class="actions special">
										<li><a href="#" class="button">美食餐饮</a></li>
									</ul>
								</article>
								<article>
									<header>
										<span class="date">入驻商家</span>
										<h2><a href="#">波奇四季ÉPOQUE
									</a></h2>
									</header>
									<a href="#" class="image fit"><img src="../images/flower.png" width="1200px" height="300px" alt="" /></a>
									<p>波奇四季ÉPOQUE（五角场店）位于政民路301号，是波奇网旗下的高端花艺品牌，严选新鲜优质的花材，业务涵盖花束定制、礼品鲜花、婚礼布置等。
                                    </p>
									<ul class="actions special">
										<li><a href="#" class="button">鲜花绿植</a></li>
									</ul>
								</article>
								<article>
									<header>
										<span class="date">入驻商家</span>
										<h2><a href="#">摩尔齿科</a></h2>
									</header>
									<a href="#" class="image fit"><img src="../images/medical.png" width="1200px" height="300px" alt="" /></a>
									<p>摩尔齿科（曲阳路旗舰店）位于曲阳路888号1-2F，致力于为广大市民朋友提供优质的口腔服务，擅长于牙齿种植，牙齿修复，牙齿矫正，牙周炎症治疗等口腔问题解决。
                                    </p>
									<ul class="actions special">
										<li><a href="#" class="button">医药健康</a></li>
									</ul>
								</article>
							</section>

						<!-- Footer pagination-->
							<footer>
								<div class="pagination">
									<!--<a href="#" class="previous">Prev</a>-->
									<a href="#" class="page active">1</a>
									<a href="#" class="page">2</a>
									<a href="#" class="page">3</a>
									<span class="extra">&hellip;</span>
									<a href="#" class="page">8</a>
									<a href="#" class="page">9</a>
									<a href="#" class="page">10</a>
									<a href="#" class="next">Next</a>
								</div>
							</footer>

					</div>

				<!-- Footer For register-->
					<footer id="footer" >
							
						<section>
						<form method="post" action="register.php">
                            <a name="register"><h2>Register注册</h2></a>
							
								<div class="fields">
									<div class="field">
										<label for="name">用户名Name</label>
										<input type="text" placeholder="示例：王小明123" style="width: 250px" name="name" id="name" onblur="EmptyUsernameHint();WrongUsernameFormHint();" />
                                        <p class="hide" style="color: red;" id="promptEN">用户名不能为空！</p>
                                        <p class="hide" style="color: red;" id="promptWrongUser">用户名格式错误！</p>
									</div>
									<div class="field">
										<label for="cardNumber">卡号Card Number</label>
										<input type="number" style="width: 250px" name="cardNumber" placeholder="xxxx-xxxx-xxxx-xxxx" id="cardNumber" onblur="EmptyCardNumber();WrongCardNumberHint();" />
                                        <p>没有工行卡？<a href="https://epass.icbc.com.cn/regist/regist_index.jsp">点此申请</a></p>
                                        <p class="hide" style="color: red;" id="promptEC">卡号不能为空！</p>
                                        <p class="hide" style="color: red;" id="promptWrongCard">卡号格式错误！</p>
									</div>

                                    <div class="field">
                                        <label for="password">密码Password</label>
                                        <input type="password" style="width: 250px" name="password" id="password" onblur="EmptyPasswordHint();WrongPasswordFormHint();" /><br>
                                        <p class="hide"  style="color: red;" id="promptEP">密码不能为空！</p>
                                        <p class=" hide"  style="color: red;" id="promptErrorP">密码格式错误！</p>

                                        <label for="Cpassword">确认密码Password</label>
                                        <input type="password" style="width: 250px" name="Cpassword" id="Cpassword" onblur="DifferentPasswordHint();EmptyCPasswordHint();" />
                                        <p class="hide" style="color: red;" id="promptDP">密码不相同！</p>
                                        <p class="hide" style="color: red;" id="promptEmptyPassWord">请确认密码！</p>
                                        <hr>
                                    </div>



								</div>
								<ul class="actions">
									<li><input type="submit" value="REGISTER" id="register_submit" /></li>
								</ul>
                            

						</section>
						<section class="split contact">
							<section class="alt">
                                <label for="address">家庭住址Address</label>
                                <input type="text" name="address"  style="width: 250px" id="address" />
							</section>
							<section>
                                <label for="phone">手机号码Phone</label>
                                <input type="number" style="width: 250px" name="phone" id="phone" onblur="EmptyPhoneHint();WrongPhoneHint();" />
                                <p class="alertWord hide" style="color: red;" id="promptEPhone" >号码不能为空！</p>
                                <p class="alertWord hide" style="color: red;" id="wrong_phone_form_hint" >号码格式错误！</p>

							</section>
                            <section>
                                <label for="verifyCode">验证码Verify</label>
                                <input type="number" maxlength="4" style="width: 200px" name="verifyCode" id="verifyCode" />
                                <p style="margin:1em;"><a href="msgVerify.php">点此获取验证码</a></p>
<!--                                <p class="alertWord" style="color: red;" id="promptDP">密码不相同！</p>-->
                            </section>

							<section>
                                <h3>其它方式注册<br>
                                other register ways</h3>
								<ul class="icons alt">
									<li><a href="#" class="icon alt fa-weixin"><span class="label">微信Wechat</span></a></li>
									<li><a href="#" class="icon alt fa-qq"><span class="label">QQ</span></a></li>
									<li><a href="#" class="icon alt fa-weibo"><span class="label">微博Weibo</span></a></li>
									<li><a href="#" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
								</ul>
							</section>


                            <section class="col-4 col-12-small">
                                <h3>注册类型：</h3>
                                <input type="radio" id="demo-priority-low" name="demo-priority" value = "1"checked>
                                <label for="demo-priority-low">用户 For user</label>
                                <input type="radio" id="demo-priority-normal" name="demo-priority" value = "0">
                                <label for="demo-priority-normal">商户 For business</label>
                            </section>
						</section>
						</form>
					</footer>

                <!-- Copyright -->
					<div id="copyright">
						<ul><li>&copy; Utility for ICBC</li><li>Design: <a href="#">FDU team</a></li></ul>
					</div>
            </div>

        <script>

        </script>



			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/jquery.scrollex.min.js"></script>
			<script src="../assets/js/jquery.scrolly.min.js"></script>
			<script src="../assets/js/browser.min.js"></script>
			<script src="../assets/js/breakpoints.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>
            <script src="../assets/js/loginPop.js"></script>
            <script src="../assets/js/map.js"></script>
            <script src="../assets/js/prompt.js"></script>

        <script type="text/javascript">
            var video = document.querySelector('video');

            var canvas1 = document.getElementById('canvas1');
            var context1 = canvas1.getContext('2d');

            navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia;
            window.URL = window.URL || window.webkitURL || window.mozURL || window.msURL;

            var exArray = [];

            getMedia();
            function getMedia() {
                if (navigator.getUserMedia) {
                    navigator.getUserMedia({
                        'video': {
                            'optional': [{
                                'sourceId': exArray[1]
                            }]
                        },
                        'audio':true
                    }, successFunc, errorFunc);
                }
                else {
                    alert('Native device media streaming (getUserMedia) not supported in this browser.');
                }
            }

            function successFunc(stream) {
                //alert('Succeed to get media!');
                if (video.mozSrcObject !== undefined) {
                    //Firefox中，video.mozSrcObject最初为null，而不是未定义的，我们可以靠这个来检测Firefox的支持
                    video.mozSrcObject = stream;
                }
                else {
                    video.src = window.URL && window.URL.createObjectURL(stream) || stream;


                }
            }
            function errorFunc(e) {
                alert('Error！'+e);
            }


            function getPhoto() {
                context1.drawImage(video, 0, 0,160,120); //将video对象内指定的区域捕捉绘制到画布上指定的区域，实现拍照。
                video.style.setProperty("display","none");
            }

            //视频

        </script>
        <script>
            $(document).ready(function() {
                var $dialog = $("#dialog");
                var $mask = $("#mask");

                //自动居中对话框
                function autoCenter(el) {
                    var bodyW = $(window).width();
                    var bodyH = $(window).height();
                    var elW = el.width();
                    var elH = el.height();
                    $dialog.css({"left": (bodyW - elW) / 2 + 'px', "top": (bodyH - elH) / 2 + 'px'});
                };

                //点击弹出对话框
                $("#login").click(function () {
                    $dialog.css("display", "block");
                    $mask.css("display", "block");
                    autoCenter($dialog);
                });

                //禁止选中对话框内容
                if (document.attachEvent) {//ie的事件监听，拖拽div时禁止选中内容，firefox与chrome已在css中设置过-moz-user-select: none; -webkit-user-select: none;
                    g('dialog').attachEvent('onselectstart', function () {
                        return false;
                    });
                }
                //声明需要用到的变量
                var mx = 0, my = 0;      //鼠标x、y轴坐标（相对于left，top）
                var dx = 0, dy = 0;      //对话框坐标（同上）
                var isDraging = false;      //不可拖动

                //鼠标按下
                $("#move_part").mousedown(function (e) {
                    e = e || window.event;
                    mx = e.pageX;     //点击时鼠标X坐标
                    my = e.pageY;     //点击时鼠标Y坐标
                    dx = $dialog.offset().left;
                    dy = $dialog.offset().top;
                    isDraging = true;      //标记对话框可拖动
                });

                //鼠标移动更新窗口位置
                $(document).mousemove(function (e) {
                    var e = e || window.event;
                    var x = e.pageX;      //移动时鼠标X坐标
                    var y = e.pageY;      //移动时鼠标Y坐标
                    if (isDraging) {        //判断对话框能否拖动
                        var moveX = dx + x - mx;      //移动后对话框新的left值
                        var moveY = dy + y - my;      //移动后对话框新的top值
                        //设置拖动范围
                        var pageW = $(window).width();
                        var pageH = $(window).height();
                        var dialogW = $dialog.width();
                        var dialogH = $dialog.height();
                        var maxX = pageW - dialogW;       //X轴可拖动最大值
                        var maxY = pageH - dialogH;       //Y轴可拖动最大值
                        moveX = Math.min(Math.max(0, moveX), maxX);     //X轴可拖动范围
                        moveY = Math.min(Math.max(0, moveY), maxY);     //Y轴可拖动范围
                        //重新设置对话框的left、top
                        $dialog.css({"left": moveX + 'px', "top": moveY + 'px'});
                    }
                    ;
                });

                //鼠标离开
                $("#move_part").mouseup(function () {
                    isDraging = false;
                });

                //点击关闭对话框
                $("#close2333").click(function () {
                    $dialog.css("display", "none");
                    $mask.css("display", "none");
                    // });
                    //
                    //窗口大小改变时，对话框始终居中
                    window.onresize = function () {
                        autoCenter($dialog);
                    };
                });
            });

        </script>
        <script>
            $(document).ready(function(){
                var $dialog2 = $("#dialog2");
                var $mask2 = $("#mask2");

                //自动居中对话框
                function autoCenter(el){
                    var bodyW2 = $(window).width();
                    var bodyH2 = $(window).height();
                    var elW2 = el.width();
                    var elH2 = el.height();
                    $dialog2.css({"left":(bodyW2-elW2)/2 + 'px',"top":(bodyH2-elH2)/2 + 'px'});
                };

                //点击弹出对话框
                $("#recharge").click(function(){
                    $dialog2.css("display","block");
                    $mask2.css("display","block");
                    autoCenter($dialog2);
                });

                //禁止选中对话框内容
                if(document.attachEvent) {//ie的事件监听，拖拽div时禁止选中内容，firefox与chrome已在css中设置过-moz-user-select: none; -webkit-user-select: none;
                    g('dialog2').attachEvent('onselectstart', function() {
                        return false;
                    });
                }
                //声明需要用到的变量
                var mx2 = 0,my2 = 0;      //鼠标x、y轴坐标（相对于left，top）
                var dx2 = 0,dy2 = 0;      //对话框坐标（同上）
                var isDraging2 = false;      //不可拖动

                //鼠标按下
                $("#move_part2").mousedown(function(e){
                    e = e || window.event;
                    mx2 = e.pageX;     //点击时鼠标X坐标
                    my2 = e.pageY;     //点击时鼠标Y坐标
                    dx2 = $dialog2.offset().left;
                    dy2 = $dialog2.offset().top;
                    isDraging2 = true;      //标记对话框可拖动
                });

                //鼠标移动更新窗口位置
                $(document).mousemove(function(e){
                    var e2 = e || window.event;
                    var x2 = e2.pageX;      //移动时鼠标X坐标
                    var y2 = e2.pageY;      //移动时鼠标Y坐标
                    if(isDraging2){        //判断对话框能否拖动
                        var moveX2 = dx2 + x2 - mx2;      //移动后对话框新的left值
                        var moveY2 = dy2 + y2 - my2;      //移动后对话框新的top值
                        //设置拖动范围
                        var pageW2 = $(window).width();
                        var pageH2 = $(window).height();
                        var dialogW2= $dialog2.width();
                        var dialogH2 = $dialog2.height();
                        var maxX2 = pageW2 - dialogW2;       //X轴可拖动最大值
                        var maxY2= pageH2 - dialogH2;       //Y轴可拖动最大值
                        moveX2 = Math.min(Math.max(0,moveX2),maxX2);     //X轴可拖动范围
                        moveY2 = Math.min(Math.max(0,moveY2),maxY2);     //Y轴可拖动范围
                        //重新设置对话框的left、top
                        $dialog2.css({"left":moveX2 + 'px',"top":moveY2 + 'px'});
                    };
                });

                //鼠标离开
                $("#move_part2").mouseup(function(){
                    isDraging2 = false;
                });

                //点击关闭对话框
                $("#Rclose").click(function(){
                    $dialog2.css("display","none");
                    $mask2.css("display","none");
                });

                //窗口大小改变时，对话框始终居中
                window.onresize = function(){
                    autoCenter($dialog2);
                };
            });







        </script>
    </body>
</html>