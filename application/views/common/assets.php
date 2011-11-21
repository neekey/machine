<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

    <!-- 默认css -->

    <!-- 页面css -->
    <?php foreach( $css as $cssItem ){ ?>
    <link href="assets/css/<?=$cssItem?>.css" rel="stylesheet" type="text/css">
    <?php } ?>

    <!-- 默认js -->

    <!-- 页面js -->
    <?php /*foreach( $js as $jsItem ){ ?>
    <script src="<?=$jsItem?>"></script>
    <?php } ?>
