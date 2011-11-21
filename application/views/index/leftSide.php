<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php
        include_once("include/config.inc.php");
        $result = mysql_query("select * from `example` where `part` = 0 and `show` = 1 order by id desc limit 0,1");
        $row = mysql_fetch_array($result);
    ?>
<style type="text/css">
<!--
.STYLE2 {font-family: "微软雅黑"}
.STYLE3 {
    color: #006699;
    font-size: 16px;
    padding-top:2px;
}
.STYLE4 {
    font-size: 15px;
    color: #006699;
    padding-top:2px;
}
.STYLE5 {font-family: "微软雅黑"; color: #006699; }
.STYLE6 {font-size: 16px}
-->
</style>

<div class="STYLE2" id="title_1">
  <div align="center" class="STYLE3">榜样在身边</div>
</div>
    <div id="line">&nbsp;</div>
    <div id="photo"><a href="#nogo"><img id="border_1" src=<?php echo $row['pic'] ?> height="170px" width="140px" onclick="avascript:new DivWindow('popup','popup_drag','popup_exit','exitButton','500','700',4);" /></a></div>
    <div class="STYLE2" id="title_1">
      <div align="center" class="STYLE4">简介</div>
    </div>
    <div  style="width:180px;">
        <ul id="show">
        <li>姓 名: <?php echo $row['name'] ?></li>
        <li>班 级: <?php echo $row['class'] ?></li>
        <li>性 别: <?php echo $row['sex'] ?></li>
        </ul>
        <div style="width:150px;padding-left:25px; ">
        <div style="width:150px; font-size:12px; height:40px; overflow:hidden; line-height:20px; -o-text-overflow: ellipsis;text-overflow: ellipsis;">
            简 介: <?php echo $row['info'] ?>        </div>
        <div align="right" style="padding-right:20px; font-size:12px"><a href="javascript:void(0);" onclick="avascript:new DivWindow('popup','popup_drag','popup_exit','exitButton','500','700',4);">详细</a></div>

         <!-- 遮罩层 -->
         <div id="mask"  class="mask">         </div>
            <!-- 弹出基本资料详细DIV层 -->
            <div class="sample_popup" id="popup" style="visibility: hidden; display: none; width:500px;">
                <div class="menu_form_header" id="popup_drag" align="center">
                    <div style="float:left; width:350px; margin-left:30px;">
                    <span style="font-size:18px; font-family:'微软雅黑','宋体'">榜样在身边</span></div>
                    <div style="float:right; padding-right:10px;">
                    <a href="javascript:void(0);" id="popup_exit" style="font-size:12px;">关闭</a></div>
                </div>
                <div class="menu_form_body" style="height:auto;">
                     <div id="popDetail" style="padding-bottom:20px; height:auto;">
                          <div style="width:140px; height:auto; overflow:hidden; float:left; margin-left:20px; margin-top:15px;">
                              <div><img id="border_1" src=<?php echo $row['pic'] ?> height="170px" width="140px" /></div>
                              <div style="height:auto; min-height:30px; margin-top:15px; margin-left:0px; padding-left:0px;">
                                <ul id="show" style="font-size:14px; width:180px;">
                                <li><b>姓 名: </b><?php echo $row['name'] ?></li>
                                <li><b>班 级: </b><?php echo $row['class'] ?></li>
                                <li><b>性 别: </b><?php echo $row['sex'] ?></li>
                                </ul>
                              </div>
                          </div>
                          <div style="float:left; margin-top:10px; height:auto; margin-left:20px; margin-right:20px; width:280px;">
                              <p style="font-size:16px; font-family:'微软雅黑','宋体'; color:#8A98C1">简介：</p>
                              <p style="font-size:14px; line-height:20px; margin-top:5px;"><?php echo $row['info'] ?></p>
                          </div>
                          <div style="clear:both; height:10px;"></div>
                     </div>
                </div>
          </div>
        </div>
    </div>

    <div class="STYLE5 STYLE6" id="system">学业支持系统</div>
    <div id="system_1"><!-- <a href="appointment/appointment.php"><img id="border_1" src="image/t1.jpg" /></a> -->
    <div id="distance"></div><a href="#nogo"><img id="border_1" src="image/t2.jpg" /></a></div>
    <div id="search">
    <div class="STYLE5" id="system">本站信息检索</div>
    <div id="system_2">
        <form name="search" action="search.php" method="get" <?php if (strstr($_SERVER["REQUEST_URI"], "search.php")==NULL) echo  "target='_blank'"; ?> >
        <p>关键字：<input type="text" size="12" name="keyword" value="<?php echo $_GET['keyword'];?>" /></p>
        <p style="margin-top:10px;">类&nbsp;型&nbsp;：<select name="stype" style="width:100px">
        <option value="0" selected="selected">学工通知</option>
        <option value="1">学院新闻</option>
        <option value="2">招生就业</option>
        <option value="3">下载中心</option>
        </select></p>
        <p align="center" style="margin-top:10px;">
        <input name="search_submit" type="submit" value="搜索" />
        <input name="search_reset" type="reset" value="重置" style="margin-left:20px" />
        </p>
        </form>
    </div>
    </div>
