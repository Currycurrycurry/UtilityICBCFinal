<?php
include_once './DefaultIcbcClient.php';
include_once './IcbcConstants.php';
//$cardnumber=$_POST["cardnumber"];

//$APP_ID="IICAMP0000000813";
//$MY_PRIVATE_KEY="MIIEvgIBADANBgkqhkiG9w0BAQEFAASCBKgwggSkAgEAAoIBAQC64pcLMw/d4KKuOWR+enu8sNpNKBhCLTD22k46Ixe8RNT7TLpyeDWkGAo/XfBCf7IMXGZo1ingQjhQcBlcgUCPlyUc7CGQQZQPatrFGwlc0egBPMeiVBtLEC8KE4rUlvP02QvQpScIAD9tEkZH8QsqKyvntRmn17SM3XhGZeAJTntwujyvRCVZmYym5FNyRknUFTnwIJHVdmOUSUhZIUzsFD6qknCwZuiga27MjeNv5IYG/KZqauGV9Le6tlbg5ut1B9Ig+6pcrK4ppWk9e+uYehyViOM8bw8QG8oCRfura1p5E71WSRVE0lNMdB9Dtw3/CyVwygcPdKQcHw0r78N/AgMBAAECggEAR29zowFKsFo8dPJVOo9hGvhTCako1Krni4RY4JonaXy6GLD0l+rhPi8+Q4iJ3TFogpcTQkGS0jkdw4mF+Dkjz39L3WlZTwXyLY5/v1YdVxCZaVetS5xwrlmqUWS07Zwh9la80G1ApStLE0sn+DnoNZ848iHkg6bNSgciAW7Rm1xvJ8FO+kGD4T6lM7wOx5bQBvvfjQiCFOaXvehBEai+szef5KcdVHGZxqj6pnOn0PyLxRt/XNd1s6JQmOoRVLIfzv4fhOjq3hYAsgl1Ko2xohCgDjyNisey9Lg5tH4ZQs9LqHbkV9sfpBd4ULimxEvrxLLuSnq20E+h87lG69Ia4QKBgQD2RPa9IEemIH1aW37ZIB3IaOgjuUJodiFJmAo2SXpj3L1pK/jMxNuYHRJfc++hJzwOL+gVq22+Yh6rVe9+JonRf3lzhsagfQcAmMR4n0p4xref/cQXrX+m7N2cgC0r+lC3+y8DelTTGBqgGwjTrJoMdqxYRETdSFTgeA7/fqkXrwKBgQDCRPL6rFIKRHAUt2ZkbMXnpJadT/8BOjWmjg2kCEvNj4EmfRurQw/NtylX8udiap9ydUz9o0v2ZpgwhBoUPyrJkF3lFgnVkmwgPq84vp61tMkol8M0BnyRD6QEey45EplrQnvhJOoDig7lViMKdtLv2OPder9raknqYMcH7sU1MQKBgQCpo2ezb4DrVoYCr/P47L6XRmxh70NnYbgcUbb3HjZIg82VnMyNgS0i4yO8zMfMYpJj02wzQRsfgcdOjquiYjmdLgojIjvAYV9pcdIkpNVPzNLASrXA+aps+czN+R0kphDkKwp/gszbfEca8oRqCwMygqzFQIGPTDvrQ8hRBpbD0QKBgFCAK8OOJozUoTEkckyI+lUr0bGsVXoXueWjlal0Op0aqyTc0Ntd9a2ECaDFKfaRQjM2wkmUIkUfbE8mXnwnVL6jkRT91eNnQmD2OLul2bRoDrdAdAYZ7gJaXdfxh0zlFSfqK9U267W9vsBvuiN665ux33KGi82iBLEXm0IBQjzxAoGBANd0avHpDtkhBETOIhCh6mm6RwC4MbKUOK3dmRAmiyq9MnLGSUtT//n+c6noz357LrlUHr/f1bvBjLeudHVao0703Ox3GV/e5K2XFfPLXN0G7RyhvD0ghWZ6ORHQY1h3hZcCwn/v6rr9CVvok1Q32aiurBQ/nXXEbUYeV0xQtF0w";
//$APIGW_PUBLIC_KEY="MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAuuKXCzMP3eCirjlkfnp7vLDaTSgYQi0w9tpOOiMXvETU+0y6cng1pBgKP13wQn+yDFxmaNYp4EI4UHAZXIFAj5clHOwhkEGUD2raxRsJXNHoATzHolQbSxAvChOK1Jbz9NkL0KUnCAA/bRJGR/ELKisr57UZp9e0jN14RmXgCU57cLo8r0QlWZmMpuRTckZJ1BU58CCR1XZjlElIWSFM7BQ+qpJwsGbooGtuzI3jb+SGBvymamrhlfS3urZW4ObrdQfSIPuqXKyuKaVpPXvrmHoclYjjPG8PEBvKAkX7q2taeRO9VkkVRNJTTHQfQ7cN/wslcMoHD3SkHB8NK+/DfwIDAQAB";
// 企业客户编号：020090002789034

// 项目编号：PJ17001701B000013674

// 缴费编号：13381128635

// 账单批次号：EPM201808010000083

// 账单序号：1、2、3、4、5、6、7、8、9

// 代理业务编号：123456799

// 收款账号：0200000209000005554
//借记卡号：6212880200000010294；姓名：测试三 ；
//身份证号：110110198801031115手机号：18922222222
date_default_timezone_set('PRC');
$dateN = date("Ymd").PHP_EOL;
$timeN = date("His").PHP_EOL;
$_SESSION['userID']=110110198801031115;
$_SESSION["cardnumber"]=6212880200000010294;
$APP_ID = "IICAMP0000000973";
$MY_PRIVATE_KEY = "MIIEvAIBADANBgkqhkiG9w0BAQEFAASCBKYwggSiAgEAAoIBAQCWiYPjvU51uGACHzoDpqpNKe/YKDQFzFqd1gtPeOxqfrrUzGkmnCLDYRSNy805AAh7Y/OG6yNJUZYj2FGr/m6DhRF/IMigpgdKTC35bTPNxCsWQ4cVw5r6u1ANnVw+O0DYjmm7MPaTvHqvStGMWrfjIYT5+YEfGoEDXp3hH+JohRJmi9fe6tFXdD0WkEDuobDuve6bdA26PA99/tZFLEMTXBfZrVSDnMjFcPdH0zkPmzN39Sxdy3m80MuDhck3Dx+GMn7t4zLLvEBlPzubZEhug7BCM1+ZVyPoIja97pVAtkCcYNo5DyP56xQYbNrZ6Dbi2hizZsLypTRItoM+sCbLAgMBAAECggEAQFoo94JFuC1JXZ7bvhPRWYtD7LPDCXeChVarHx4icqQaWj3H9alpcvxdPQCSintpJNZllJeQTheCh3BB+bSaqb6I7D+nhIV1OF24iZgVPTFO+gWECdnEtsq8PhW3CSNrZSf8KvmTbzRzfdwOGGHvmjkKD5KJkDJUVIxuEX7/2o3gVVTTl336OCzHD9wHyYU1oLIMtPVBA8VkNyy2h98OszCgTOl6UDWgRINXRFK43rMcN7Uu6wRcg7TAGtrOs60pikpLfMSI3lRIPOHbxH65K/cQJdTAfT/Rh+ONMAX3jh8ECq+0Wt7+Iz34XeBFOLjLPWLuopQd+rAh9lyuQ1mIgQKBgQDQ6cLGinCcEx55FBLuti8ECWsYme5ZCY/4YxJtPUzqrXvJe2Y7l9J5Fn/IVsZ+t2cI5q4lhvpbMrl7fkwwHDhDO6ow2n6pvZyerJnbqpZFg1ido+chbU9KClI6QuFdNak4WKxFH3xE2RHcNcEB4a8XEmnqn2+pgfyIhNNH6Yv4RQKBgQC4d3mZL3lQslx/eL0kQyXtUSaPePOYZAD18tsIftR3X02iKiPxW6KvpUKCpTnIqMxDUrCrm23HebRx8WNTFn2z3wnu+tSe9ZZvH+suLIFsO5PJ+/f5AAVgcr76/GlnOqccDy9BOrskHYV8DbjUyzYEkGsZacLA/6luvVIoLgi7zwKBgFYReGVDc9FZLxzC4GnoNMZ8+tpP0JpuDhpO9rB6qM2mW3FOnXe/vL6WPl7TIUPjW1eXcfeT/GDGLRRrnAfWGHfahOtLmRNlQrk8csbFKNPKoR+Q/xAOcLQYPHg0RZSZHvZP0elIZ3IV2/3VR4b266OdunUm6mHzY4766fCej0PhAoGAftsCz3qbVghinfLdN6vJ0EsHVpEaDAlxs7HAOTZnTHRIwiVytE+NMHdYptmTRE/4sK+T+V+Y/h3PHrCe2ovUBDd08FikkXBYdLEhnY5TrqfF+ZiCrkT6bZpbheTBY5EtTJmQqK4H9k0q9+XD3uqkijz6ue5GVU08KoCdmC4YKXcCgYA6BmQ0PRoCRlhKM8dyXYDrQXKbIJj6shP/aSu/9I91CWicoqO0639Jea88a1axsesSw8R01HVpVQdD9g+cDip9MwXD+8vzrp5O3SLctMcJfJwYG/q1z3c13MvNPr4GCfpF3F/G4Lo1qLk+lOWonbhwHwaDASKMvEA3qaZciEvJHQ==";
$APIGW_PUBLIC_KEY = "MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCwFgHD4kzEVPdOj03ctKM7KV+16bWZ5BMNgvEeuEQwfQYkRVwI9HFOGkwNTMn5hiJXHnlXYCX+zp5r6R52MY0O7BsTCLT7aHaxsANsvI9ABGx3OaTVlPB59M6GPbJh0uXvio0m1r/lTW3Z60RU6Q3oid/rNhP3CiNgg0W6O3AGqwIDAQAB";

$request = array(
    "serviceUrl" => 'https://apisandbox.dccnet.com.cn/ui/epayment/project/V1',
    "method" => 'POST',
    "isNeedEncrypt" => false,
    "biz_content" => array(
        "computeId"=>'10',
        'areaCode'=>'0200',
        'userID'=>'020090002789034',
        'payitemCode'=>'PJ17001701B000013674',
        'CustomInfo'=>'PJ17001701B000013674'


    )

);
$client = new DefaultIcbcClient($APP_ID,
    $MY_PRIVATE_KEY,
    IcbcConstants::$SIGN_TYPE_RSA,
    '',
    '',
    $APIGW_PUBLIC_KEY,
    '',
    '',
    '',
    ''
);
$resp = $client->execute($request,'msgId','');//执行调用;msgId消息通讯唯一编号，要求每次调用独立生成，APP级唯一
//var_dump($resp);
echo $resp;
$respObj = json_decode($resp,true);
if($respObj["return_code"] == 0){ //sucess
    echo $respObj["account_balance"];
}
?>