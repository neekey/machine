<?php
    class Post extends CI_Model {

        /**
         * 页面类型，对应的表名称
         */
        var $pageType = Array(
            'index' => 'index',
            'graduate' => 'graduate',
            'party-building' => 'party-building'
        );

        var $blockType = Array(
            'notification' => 0,
            'news' => 1,
            'jobInfo' => 0,         // 
            'policy' => 3           // 政策指南
        );
        var $date    = '';

        function __construct(){

            parent::__construct();
        }

        function getChunk( $pt, $bt ){

            $query = $this->db->get_where( $this->pageType[ $pt ], array( 'tid' => $this->blockType[ $bt ] ), 8, 0 );

            return $query->result();

        }

        function get_last_ten_entries(){

            $query = $this->db->get('entries', 10);
            return $query->result();
        }

        function insert_entry(){

            $this->title   = $_POST['title']; // 请阅读下方的备注
            $this->content = $_POST['content'];
            $this->date    = time();

            $this->db->insert('entries', $this);
        }

        function update_entry(){

            $this->title   = $_POST['title'];
            $this->content = $_POST['content'];
            $this->date    = time();
    
            $this->db->update('entries', $this, array('id' => $_POST['id']));
        }
    }
?>