<!DOCTYPE HTML>
<html>
<head>
    <title>details for sample Family Store</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <link rel="shortcut icon" href="build2/TemplateData/favicon.ico">
    <link rel="stylesheet" href="build2/TemplateData/style.css">
    <script src="build2/TemplateData/UnityProgress.js"></script>
    <script src="build2/Build/UnityLoader.js"></script>
    <script>
        var gameInstance = UnityLoader.instantiate("gameContainer", "build2/Build/build2.json", {onProgress: UnityProgress});
    </script>
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
            <li><a href="#">AJISEN RAMEN味千拉面</a></li>
            <li><a href="#">ÉPOQUE波奇四季</a></li>
            <li class="active"><a href="details.php">Family全家</a></li>
        </ul>
        <?php include "createNav.php" ?>
    </nav>

    <!-- Main -->
    <div id="main">
        <h3>Family新品展示</h3>

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


        <div class="webgl-content" style="position:absolute;top:300px;left:50%;z-index:99999;">
            <div id="gameContainer" style="width: 600px; height: 400px"></div>
            <div class="footer">
                <div class="title">新品3D展示</div>
                <div class="fullscreen" onclick="gameInstance.SetFullscreen(1)"></div>

            </div>
        </div>

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>


        <header class="major">
            <span class="date"><?php echo " " . date("Y/m/d") . "<br>"; ?></span>
            <h1><a href="#">Family<br />
                    全家</a></h1>
        </header>


        <div class="box alt">
            <div class="row gtr-50 gtr-uniform">
                <div class="col-4"><span class="image fit"><label>休闲零食</label><img style="width:250px;height:200px;" src="../images/family/chips.jpeg" alt="" /><label class="goodName">乐事薯片（原味）</label><label class="goodPrice">￥7</label><a href="#" class="button small">第二份1.8折</a>  <a class="button small add" onclick="alert('添加成功！')">加入购物车</a></span></div>
                <div class="col-4"><span class="image fit"><label>醇享咖啡</label><img style="width:250px;height:200px;" src="../images/family/coffee.jpeg" alt="" /><label class="goodName">焦糖拿铁咖啡 </label><label class="goodPrice">￥14</label><a href="#" class="button small">第二份1.8折</a>  <a onclick="alert('添加成功！')" class="button small  add">加入购物车</a></span></div>
                <div class="col-4"><span class="image fit"><label>日用百货</label><img style="width:250px;height:200px;" src="../images/family/napkin.jpeg" alt="" /><label class="goodName">得宝卫生湿巾 </label><label class="goodPrice">￥6.8</label><a href="#" class="button small">第二份1.8折</a>  <a onclick="alert('添加成功！')" class="button small add">加入购物车</a></span></div>
                <!-- Break -->
                <div class="col-4"><span class="image fit"><label>面包甜点</label><img style="width:250px;height:200px;" src="../images/family/bread.jpg" alt="" /><label class="goodName">椰丝餐包 </label><label class="goodPrice">￥8</label><a href="#" class="button small">第二份1.8折</a>  <a onclick="alert('添加成功！')" class="button small add">加入购物车</a></span></div>
                <div class="col-4"><span class="image fit"><label>饱腹神器</label><img style="width:250px;height:200px;" src="../images/family/dinner.jpeg" alt="" /><label class="goodName">奥尔良整只鸡腿饭 </label><label class="goodPrice">￥17.8</label><a href="#" class="button small">第二份1.8折</a>  <a onclick="alert('添加成功！')" class="button small add">加入购物车</a></span></div>
                <div class="col-4"><span class="image fit"><label>美妆护理</label><img style="width:250px;height:200px;" src="../images/family/makeup.jpeg" alt="" /><label class="goodName">杰俊密集焕亮面膜 </label><label class="goodPrice">￥24.8</label><a href="#" class="button small">第二份1.8折</a>  <a onclick="alert('添加成功！')" class="button small add">加入购物车</a></span></div>
                <!-- Break -->
                <div class="col-4"><span class="image fit"><label>营养奶品</label><img style="width:250px;height:200px;" src="../images/family/milk.jpeg" alt="" /><label class="goodName">香飘飘MECO牛乳茶 </label><label class="goodPrice">￥11.9</label><a href="#" class="button small">第二份1.8折</a>  <a onclick="alert('添加成功！')" class="button small add">加入购物车</a></span></div>
                <div class="col-4"><span class="image fit"><label>开心糖果</label><img style="width:250px;height:200px;" src="../images/family/sweet.jpeg" alt="" /><label class="goodName">CORORO草莓味软糖 </label><label class="goodPrice">￥10</label><a href="#" class="button small">第二份1.8折</a>  <a onclick="alert('添加成功！')" class="button small add">加入购物车</a></span></div>
                <div class="col-4"><span class="image fit"><label>精选水饮</label><img style="width:250px;height:200px;" src="../images/family/water.jpeg" alt="" /><label class="goodName">茉莉蜜茶 </label><label class="goodPrice">￥5</label><a href="#" class="button small">第二份1.8折</a>  <a onclick="alert('添加成功！')" class="button small add">加入购物车</a></span></div>
            </div>
        </div>

        <h3>ShoppingCart购物车</h3>

        <div class="table-wrapper">
            <table id="cart">
                <thead>
                <tr>
                    <th>商品名称Name</th>
                    <th>数量Number</th>
                    <th>价格Price</th>
                    <th>小计sum</th>
                    <th>删除delete</th>
                </tr>
                </thead>
                <tbody id="cartTr">

                </tbody>
                <tfoot>
                <tr>
                    <td colspan="2">商品一共<a id="goodNumber">0</a>件</span></td>
                    <td colspan="2" id="goodSum">0.00</td>
                    <td ><a class="button small" id="checkout" value="结算" href="details.php#register">结算</a></td>
                </tr>
                </tfoot>
            </table>
        </div>

        <hr />


            <!-- Footer Regsster -->
            <footer id="footer">
                <section>
                    <a name="register"><h2>Check out支付确认</h2></a>
                    <form method="post" action="#">
                        <div class="fields">
                            <div class="field">
                                <label for="name" style="width: 100px">确认姓名Name</label>
                                <input type="text" name="name" id="name" placeholder="王晓宁" />
                            </div>

                            <div class="field">
                                <label for="password" style="width: 260px" >支付密码password  <a onclick="alert('小额免密协议');">开启小额免密支付</a></label>

                                <input type="password" name="password" id="password" />
                            </div>
                        </div>
                        <ul class="actions">
                            <li><input type="submit" value="开通会员服务" /></li>

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

    <script>

        var tmpSum;

        $("#cartTr").on("click",".delete",function(){
            $(this).parent().parent().remove();

            var tmp = parseInt($("#goodNumber").text()+"")-1;
            $("#goodNumber").text(tmp+"");

            tmpSum = 0.00;
            $(".total").each(function(){
                tmpSum +=parseFloat(($(this).text()+"").substring(1));
            });

            $("#goodSum").text(tmpSum+"");

        });

         $("#cartTr").on("click",".fa-plus",function(){
             var oldVal = $(this).siblings("span").text()+"";
             //alert(oldVal);
             var newVal =parseInt(oldVal)+1;
             //alert(newVal);
             $(this).siblings("span").text(newVal+"");

             var tmpStr = $(this).parents(".goodTr").find(".priceTr").text()+"";
             var goodPrice = parseFloat(tmpStr.substring(1));

             //alert(goodPrice);

             var newTotal = newVal * goodPrice;
             //$(this).nextAll(".total").text(newVal+"");
             $(this).parents(".goodTr").find(".total").text("￥"+newTotal+"");
             //alert(goodPrice);

             var tmp = parseInt($("#goodNumber").text()+"")+1;
             $("#goodNumber").text(tmp+"");

             tmpSum = 0.00;
             $(".total").each(function(){
                 tmpSum +=parseFloat(($(this).text()+"").substring(1));
             });

             $("#goodSum").text(tmpSum+"");

         });

        $("#cartTr").on("click",".fa-minus",function(){
            var oldVal = $(this).siblings("span").text()+"";
            //alert(oldVal);
            var newVal =(parseInt(oldVal)-1)>0?(parseInt(oldVal)-1):1;
            //alert(newVal);
            $(this).siblings("span").text(newVal+"");

            var tmpStr = $(this).parents(".goodTr").find(".priceTr").text()+"";
            var goodPrice = parseFloat(tmpStr.substring(1));

            //alert(goodPrice);

            var newTotal = newVal * goodPrice;
            //$(this).nextAll(".total").text(newVal+"");
            $(this).parents(".goodTr").find(".total").text("￥"+newTotal+"");
            //alert(goodPrice);

            var tmp = parseInt($("#goodNumber").text()+"")-1;
            $("#goodNumber").text(tmp+"");

            tmpSum = 0.00;
            $(".total").each(function(){
                tmpSum +=parseFloat(($(this).text()+"").substring(1));
            });

            $("#goodSum").text(tmpSum+"");

        });

        $(".add").click(
            function(){
                var goodNmae = $(this).prevAll(".goodName").text();
                //alert(goodNmae);
                var goodPrice = $(this).prevAll(".goodPrice").text();
                //alert(goodPrice);
                var newGood = "<tr class=\"goodTr\">\n" +
                    "                    <td>"+goodNmae+"</td>\n" +
                    "                    <td><span><a class=\"icon fa-minus\"></a> <span> 1 </span> <a class=\"icon fa-plus\"></a></span></td>\n" +
                    "                    <td class=\"priceTr\">"+goodPrice+"</td>\n" +
                    "                    <td class=\"total\" >"+goodPrice+"</td>\n" +
                    "                    <td><a class=\"button small delete\" id=\"delete\" >删除</a></td>\n" +
                    "                </tr>";
                $("#cartTr").append(newGood);

                var tmp = parseInt($("#goodNumber").text()+"")+1;
                $("#goodNumber").text(tmp+"");

                tmpSum = 0.00;
                $(".total").each(function(){
                    tmpSum +=parseFloat(($(this).text()+"").substring(1));
                });

                $("#goodSum").text(tmpSum+"");

            }
        );


    </script>
</body>
</html>