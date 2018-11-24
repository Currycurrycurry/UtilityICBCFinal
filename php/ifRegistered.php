<?php
/**
 * Created by PhpStorm.
 * User: huangjiani
 * Date: 2018/11/23
 * Time: 21:31
 */

session_start();
//echo $_SESSION['userName'];
if(!isset($_SESSION['userName'])){
    showUnregister();
}

function showUnregister(){
    echo '  <form method="post" action="register.php">
        <footer id="footer" >
                <section>
                    <a name="register"><h2>Register注册</h2></a>

                    <div class="fields">
                        <div class="field">
                            <label for="name">用户名Name</label>
                            <input type="text" style="width: 250px" name="name" id="name" placeholder="必须包含包含6位以上的字符！" onblur="EmptyUsernameHint();WrongUsernameFormHint();" />
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
                            <input type="password" style="width: 250px" name="password" id="password" onblur="EmptyPasswordHint();WrongPasswordFormHint();" placeholder="密码必须包含英文和数字！" /><br>
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
        </footer>
        </form>';






}