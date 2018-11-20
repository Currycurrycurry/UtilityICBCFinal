<?php
/**
 * Created by PhpStorm.
 * User: huangjiani
 * Date: 2018/10/16
 * Time: 15:08
 */

session_start();
if(!isset($_SESSION['userName'])){
    showUnloged();
}else{
    showLoged();
}

//<li><a href="#" class="icon fa-money" id="recharge"><span class="label">Recharge</span></a>充值</li>
function showUnloged(){
    echo '<ul class="icons">
							<li><a class="icon fa-user" id="login"><span class="label">Login</span></a>登陆</li>
							<li><a href="index.php#register" class="icon fa-user-circle"><span class="label">Register</span></a>注册</li>
						

						</ul>';
}


function showLoged(){
    echo '
    <ul class="icons">
							<li><a href="#" class="icon fa-user"><span class="label">Login</span></a>'.$_SESSION['userName'].'</li>
							<li><a href="#" class="icon fa-money" id="recharge"><span class="label">Recharge</span></a>充值</li>
							<li><a href="logout.php" class="icon fa-sign-out"><span class="label">Logout</span></a>登出</li>
							<li><a href="#" class="icon fa-user-circle" id="balance"><span class="label">Balance</span></a>账户余额：';
    include_once("BalanceQuery.php");
    echo ' 元</li>
						</ul>
    ';




}
//<div class="login-button">
//            <button id="login"> 登录</button>
//        </div>