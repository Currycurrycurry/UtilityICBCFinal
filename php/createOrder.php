<!DOCTYPE HTML>
<html>
<head>
    <title>orders for sample Family Store</title>
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
            <li class="active"><a href="index.php">Goods跑腿代购</a></li>
            <li><a href="parking.php">Come Parking自助停车</a></li>
            <li><a href="payment.php">Payments生活缴费</a></li>
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

        <header class="major">
									<span class="date"><?php
                                        echo " " . date("Y/m/d") . "<br>";
                                        ?></span>
            <h1><a href="#">Family<br />
                    全家</a></h1>

        </header>

        <h3>Order List当前订单</h3>

        <div class="table-wrapper">
            <form method="post" action="createOrder.php">
            <table id="cart">
                <thead>
                <tr>

                    <th>数量Number</th>
                    <th>小计sum</th>
                </tr>
                </thead>
                <tbody id="cartTr">

                </tbody>
                <tfoot>
                <tr>
                    <td colspan="1">商品一共<a id="goodNumber"><?php echo $_POST["goodNumber"] ?></a>件</span></td>
                    <td colspan="1" id="goodSum">0.00</td>
                    <td ><button type="submit" class="button small" id="checkout" value="支付">支付</button></td>
                </tr>
                </tfoot>
            </table>
            </form>
        </div>

        <hr />

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


        // $(document).ready(function(){
        //     $(".total").each(function(){
        //         tmpSum +=parseFloat(($(this).text()+"").substring(1));
        //     });
        //
        //     $("#goodSum").text(tmpSum+"");
        // });

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


        //待补充：人脸识别支付 商户收单二维码
        $("#checkout").click(
            function () {
                submit();
            }
        );


    </script>
</body>
</html>





