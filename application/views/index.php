<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php $this->load->view( 'common/head' ); ?>
<?php $this->load->view( 'common/assets' ); ?>


<body>
<div id="content">

    <?php $this->load->view("common/header"); ?>

    <div id="nav">
        <span id="nav_1" class="active"><a href="index.php">首页</a></span>
        <span id="nav_2"><a href="http://www.jdxy.zjut.edu.cn/index.asp">学院首页</a></span>
        <span id="nav_3"><a href="party-building/party-building.php">学生党建</a></span>
        <span id="nav_4"><a href="student-league/student-league.php">团学动态</a></span>
        <span id="nav_5"><a href="graduate/graduate.php">机械研究生</a></span>
        <span id="nav_6"><a href="kwkj/kwkj.php">科技创新</a></span>
        <span id="nav_7"><a href="seework/seework.php">招生就业</a></span>
        <span id="nav_8"><a href="download.php">下载中心</a></span>
    </div>


    <div id="main">
        <div id="sideBar" class="floatleft">
            <?php //$this->load->view("index/leftSide"); ?>
        </div>
        <div id="container" class="floatleft">
            <div id="banner">
            <?php //include('pic.php'); ?>
            </div>
            <div id="shop" style="margin-top:10px;">
                <div id="shop_1">

                    <!-- 通知  -->
                    <div id="notice" class="floatleft">
                        <div id=title_t>
                            <div class="floatleft"><span  class="title_z">通知</span></div>
                            <div id="title_2"><span id="title_more"><a href="recordlist.php?tid=0&part=0">More</a></span></div>
                        </div>
                        <div id="fill">
                            <ul>
                                <table>
                                <?php
                                    if( sizeof( $blocks[ 'notification' ] ) > 0 ){
                                    foreach( $blocks[ 'notification' ] as $post ){
                                ?>
                                    <tr><td width='75%'>
                                        <li><a href="showContext.php?id=<?=$post->id?>&tid=0&part=0"><?=$post->title?></a>
                                        <?php if( gmdate("Y-m-d", time() ) == date( "Y-m-d", strtotime( $post->ptime ) ) ){ ?>
                                            &nbsp;<img src="image/arr_new.gif" width="28" height="11" />
                                        <?php } ?>
                                        </li>
                                    </td>
                                    <td>
                                        <span class='time'>(<?=date("Y-m-d",strtotime($post->ptime ) )?>)</span>
                                    </td></tr>

                                <?php } } ?>
                                </table>
                            </ul>
                        </div>
                    </div>

                    <!-- 新闻 -->
                    <div id="news" class="floatleft">
                        <div id=title_t>
                            <div class="floatleft"><span  class="title_z">新闻</span></div>
                            <div id="title_2"><span id="title_more"><a href="recordlist.php?tid=1&part=0">More</a></span></div>
                        </div>
                        <div id="fill">
                            <ul>
                                <table>
                                <?php
                                    if( sizeof( $blocks[ 'news' ] ) > 0 ){
                                    foreach( $blocks[ 'news' ] as $post ){
                                ?>
                                    <tr><td width='75%'>
                                        <li><a href="showContext.php?id=<?=$post->id?>&tid=0&part=0"><?=$post->title?></a>
                                        <?php if( gmdate("Y-m-d", time() ) == date( "Y-m-d", strtotime( $post->ptime ) ) ){ ?>
                                            &nbsp;<img src="image/arr_new.gif" width="28" height="11" />
                                        <?php } ?>
                                        </li>
                                    </td>
                                    <td>
                                        <span class='time'>(<?=date("Y-m-d",strtotime($post->ptime ) )?>)</span>
                                    </td></tr>

                                <?php } } ?>
                                </table>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="shop_2" class="clear">
                    <!-- 就业信息 -->
                    <div id="infomation" class="floatleft">
                        <div id=title_t>
                            <div class="floatleft"><span  class="title_z">就业信息</span></div>
                            <div id="title_2"><span id="title_more"><a href="recordlist.php?tid=1&part=0">More</a></span></div>
                        </div>
                        <div id="fill">
                            <ul>
                                <table>
                                <?php
                                    if( sizeof( $blocks[ 'jobInfo' ] ) > 0 ){
                                    foreach( $blocks[ 'jobInfo' ] as $post ){
                                ?>
                                    <tr><td width='75%'>
                                        <li><a href="showContext.php?id=<?=$post->id?>&tid=0&part=5"><?=$post->title?></a>
                                        <?php if( gmdate("Y-m-d", time() ) == date( "Y-m-d", strtotime( $post->ptime ) ) ){ ?>
                                            &nbsp;<img src="image/arr_new.gif" width="28" height="11" />
                                        <?php } ?>
                                        </li>
                                    </td>
                                    <td>
                                        <span class='time'>(<?=date("Y-m-d",strtotime($post->ptime ) )?>)</span>
                                    </td></tr>

                                <?php } } ?>
                                </table>
                            </ul>
                        </div>
                    </div>

                    <!-- 政策指南 -->
                    <div id="guide" class="floatleft">
                        <div id=title_t>
                            <div class="floatleft"><span  class="title_z">政策指南</span></div>
                            <div id="title_2"><span id="title_more"><a href="recordlist.php?tid=1&part=0">More</a></span></div>
                        </div>
                        <div id="fill">
                            <ul>
                                <table>
                                <?php
                                    if( sizeof( $blocks[ 'policy' ] ) > 0 ){
                                    foreach( $blocks[ 'policy' ] as $post ){
                                ?>
                                    <tr><td width='75%'>
                                        <li><a href="showContext.php?id=<?=$post->id?>&tid=3&part=0"><?=$post->title?></a>
                                        <?php if( gmdate("Y-m-d", time() ) == date( "Y-m-d", strtotime( $post->ptime ) ) ){ ?>
                                            &nbsp;<img src="image/arr_new.gif" width="28" height="11" />
                                        <?php } ?>
                                        </li>
                                    </td>
                                    <td>
                                        <span class='time'>(<?=date("Y-m-d",strtotime($post->ptime ) )?>)</span>
                                    </td></tr>

                                <?php } } ?>
                                </table>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("common/foot"); ?>