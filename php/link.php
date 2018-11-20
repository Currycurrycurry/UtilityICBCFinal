<?php
/**
 * Created by PhpStorm.
 * User: kosphere
 * Date: 2018/8/11
 * Time: 16:33
 */
date_default_timezone_set('PRC');
    $link = mysqli_connect(
        'localhost',
        'root',
        '',
        'utilities');
if (!$link) {
    printf("Can't connect to MySQL Server. Errorcode: %s ", mysqli_connect_error());
    exit;
}

?>