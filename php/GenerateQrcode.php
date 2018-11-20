<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
</head>
<body>
<script type="text/javascript" src="js/jquery-3.3.1.min.js" ></script>
<script type="text/javascript" src="js/jquery.qrcode.js" ></script>
        <script type="text/javascript" src="js/qrcode.js" ></script> 
		<?php echo '<p>时间：'.date("Y年m月d日H点i分s秒").PHP_EOL.'</p>'; ?>
<p>生成的二维码：</p>
<div id="qrcodeCanvas"></div>
<?php

include_once './DefaultIcbcClient.php';
include_once './IcbcConstants.php';
date_default_timezone_set('PRC'); 
$dateN = date("Ymd").PHP_EOL;
$timeN = date("His").PHP_EOL;

//phpinfo();
	          $request = array(
          		"serviceUrl" => 'https://apisandbox.dccnet.com.cn/api/qrcode/V2/generate',
          		"method" => 'POST',
          		"isNeedEncrypt" => false,
          		"biz_content" => array(
								"mer_id"=>"020002040095",
								"store_code"=>"02000015087",
								"out_trade_no"=>"ZHL777O15002039",
								"order_amt"=>"7370",
								"trade_date"=>$dateN,
								"trade_time"=>$timeN,
								"attach"=>"abcdefg",//该字段非必输项
								"pay_expire"=>"1200",
								"notify_url"=>"localhost",//该字段非必输项
								"tporder_create_ip"=>"127.0.0.1",
								"sp_flag"=>"0",//该字段非必输项
								"notify_flag"=>"1"
								)

          	);
          	//以下构造函数第1个参数为appid，第2个参数为RSA密钥对中私钥，第6个参数为API平台网关公钥
            $client = new DefaultIcbcClient('IICAMP0000000000',
            	                             'MIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQDnvZ1BKdJDVx/QuD2rTTORu/yNYP7eamuvdWywsRNf2JZhwExOEYk9t3rxMe+WexyEQeGxArm3ZEn6y5nFqPGHG1PuU5XYIsfWX17kJcCkyV9e4lqNXUiNJCBpzB9FtVjpkeckZOmmkBBbeNNSTjrrBmDwjxjSlgX0w6jo/I3i4JccXf2cANng+IuTc8U0ekJJUBnru8B6kho0JCN5oErNYP85Z0rbxQ+AyRmkhp4uy+8Nj1a6eGY/gvExgT0m/s9cKYnLQYq8VZtw/P07qcUa9tYcgrNMkvoHDlpACIEobFtwmwATPY7GwB4vLpFiWoh+UUyijpWY2bdRCeQfCZCNAgMBAAECggEACoFrDpgxwwHBHHotuYVPcCzgfxxFkZmrdhHRspTkdvTfpGDOVL+wxA58UVDdNqowGcLO03J3LtwqCmeOegp1oJVZkbVSVrEE9C/wolEf0ZibbTa/uibfch6QJZuuUz+sXzJREzJL8VQYmbz5f4KyYxMv89fY3TsV3Am+r4k7eWx098w3LQR/MYZWXz2TM6dazZuYGPJczO0YqKXYHXAcsBhdwIkuhPuS4U8O1Xtz91ppPbEuDBK6dzFCL+DCCTgLnuU8nmC65KJIbp7RhkjEFeZbA3ajUbzF8ih+jRoqOM6yTgHKAM+pRX4iNQUxaWlKUDX/064hsIoWTHYn6jkMtQKBgQDz2vkNuaXn2C1/Fh2KEMDdekvCpOZBVbbSaXNm/ydQBsIFg2OwA5q5/leImlacbsu6/NvX4cr+0eXDMJJM6lMp3J00qlGHxO0cw3bCRIlJPRKeZtZotP8oI3VqI3+0YFuqS+R1bgDMQQVhH4uPgTCs2zfY5o8aCnUeFIWI1poewwKBgQDzSC+EKAF8ln2uLIR21UPS2KIjA2mNVicObVQ2z2m3om0vOosjv5mWJPVjf1lT+CYQummWWRWeaLntMeFq8JQjDC8Oa1rrq5ESzlUEU7sIxwT34ETpGw8mrr1TPMj3Q4xqxWey1VjXyszF7EYrRgDz5I8Q19VQwor03rqb4AE+bwKBgFQQ3CUYKBKqGt0iAaL0LZjsrSt374z8gJ8/DTKnqaTT/5Uo+3fVdkTCYujL1CnvpDpdK2jcBUAdmijVGMp9SZg33tYmFR9KCzgMRmeoeu+Np1qGN0o3g3MR7ktd24uSYGdv7F1zQ8EmdTVLS7B4KBCfLjyPFywyCLgK+RH4cX9DAoGAKqFPkjzgZdCJHWg3ngso412Kq9ABQv8BwQlvZFtcDw2rTEdZ8l20sBax2UmLgadOJEhGEE5z91oqmmHPOkoF605LQJ+XQwzBUyZMx4FUmOkm+biW2rIfKYwdKOTR4mI3zM3iqfewpb+nulb4xMRzjklSuITZoFk2uEn/MSlDjokCgYEAi3Sao0jxsaU1RXrkoA2PfN9jFr5ofSuKStCfjXY1SPHb/Vms0SU2aVkcegLVNLEiqwHGnIyFp4gYSTWMC3vRbCifScYIiSSnElFari7CJtJhb5nfSpsvX1lafBx2Lzs/R6ijD7poqUtMBoi61T/JE7JpgclcaCrjISMYSECqMM8=',
            	                             IcbcConstants::$SIGN_TYPE_RSA,
            	                             '',
            	                             '',
            	                             'MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCwFgHD4kzEVPdOj03ctKM7KV+16bWZ5BMNgvEeuEQwfQYkRVwI9HFOGkwNTMn5hiJXHnlXYCX+zp5r6R52MY0O7BsTCLT7aHaxsANsvI9ABGx3OaTVlPB59M6GPbJh0uXvio0m1r/lTW3Z60RU6Q3oid/rNhP3CiNgg0W6O3AGqwIDAQAB',
			                                 '',
			                                 '',
			                                 '',
			                                 '');
            $resp = $client->execute($request,'msgId','');//执行调用;msgId消息通讯唯一编号，要求每次调用独立生成，APP级唯一
            //echo $resp;
            $respObj = json_decode($resp,true);
            if($respObj["return_code"] == 0){ //sucess
            	echo $respObj["qrcode"];
				echo '<br>';
				print_r($respObj);
				echo'<!DOCTYPE html>


<script>  
       jQuery("#qrcodeCanvas").qrcode({
      render    : "canvas",
         text    : "'.$respObj["qrcode"].'",
         width : "200",               
                 height : "200",              
                 background : "#ffffff",       
                 foreground : "#000000",        
     });       
</script>
';
//echo date('YmdHis');
				
				
            }else{//fail
				      echo $respObj["return_msg"];
            }

?>
</body>
</html>