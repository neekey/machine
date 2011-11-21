<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<style type="text/css">
.txttop {background:#FFFFFF; BORDER-TOP-WIDTH: 0px; BORDER-LEFT-WIDTH: 0px; BORDER-BOTTOM-WIDTH: 0px; MARGIN: 0px; BORDER-RIGHT-WIDTH: 0px}
</style>

<div id="header">
    <div id="login">
        <form name="stulogin" target="_blank" action="student/showStu.php" method="post">
            <div id="login_1" class="floatleft">
                <span class="text">学号：</span>
                <input id="userName" name="userID" size="9" type="text" class="txttop" onfocus="return gotfocus('userName')" onblur="return lostfocus('userName')" />
            </div>
            <div id="login_2" class="floatleft">
                <span class="text">密码：</span>
                <input id="userPwd" name="userPwd" size="9" type="password" class="txttop" onfocus="return gotfocus('userPwd')" onblur="return lostfocus('userPwd')" />
            </div>
            <div class="floatleft">
                <a href="#nogo">
                    <input id="login_3" style="height:18px" name="login" type="submit" value="登陆" />
                </a>
            </div>
        </form>
    </div>
</div>