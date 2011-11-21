<?php
    class Index extends CI_Controller {

        var $blockPosts = Array();

        function __construct(){

            parent::__construct();

            $this->load->model( 'post' );
        }
        
        function index(){

            $blockPosts = Array(
                'notification' => $this->post->getChunk( 'index', 'notification' ),
                'news' => $this->post->getChunk( 'index', 'news' ),
                'jobInfo' => $this->post->getChunk( 'index', 'jobInfo' ),
                'policy' => $this->post->getChunk( 'index', 'policy' ),

            );

            $this->load->view( 'index', Array(
                'blocks' => $blockPosts,
                'title' => '机械学院-学生工作',
                'js' => Array(),
                'css' => Array(
                    'common',
                    'example'
                )
            ));
        }

        function comments(){
            echo '看这里！';
        }
    }
?>