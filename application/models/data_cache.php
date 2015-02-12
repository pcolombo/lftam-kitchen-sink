<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_cache extends CI_Model {
    
    private $CACHE = array();

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();

        $this->CACHE = array(
            "comments" => array(
                ARTICLE_ID      => DEMO_ARTICLE_ID_PREFIX."0001",
                ARTICLE_TITLE   => "Comments",
                ARTICLE_URL     => "comments"
            ),
            "blog" => array(
                ARTICLE_ID      => DEMO_ARTICLE_ID_PREFIX."0002",
                ARTICLE_TITLE   => "Blog",
                ARTICLE_URL     => "blog", 
                COLLECTION_TYPE => TYPE_LIVEBLOG
            ),
            "chat" => array(
                ARTICLE_ID      => DEMO_ARTICLE_ID_PREFIX."0003",
                ARTICLE_TITLE   => "Chat",
                ARTICLE_URL     => "chat", 
                COLLECTION_TYPE => TYPE_LIVECHAT
            ),
            "sidenotes" => array(
                ARTICLE_ID      => DEMO_ARTICLE_ID_PREFIX."sn_0001",
                ARTICLE_TITLE   => "Sidenotes",
                ARTICLE_URL     => "sidenotes", 
                COLLECTION_TYPE => TYPE_SIDENOTES
            ),
            "reviews" => array(
                ARTICLE_ID      => DEMO_ARTICLE_ID_PREFIX."0004",
                ARTICLE_TITLE   => "Reviews",
                ARTICLE_URL     => "reviews", 
                COLLECTION_TYPE => TYPE_LIVEREVIEWS
            ),
            "mediawall" => array(
                ARTICLE_ID      => "",
                ARTICLE_TITLE   => "Media Wall App",
                ARTICLE_URL     => "mediawall"
            ),
            "gallery" => array(
                ARTICLE_ID      => "",
                ARTICLE_TITLE   => "Gallery App",
                ARTICLE_URL     => "gallery"
            ),
            "feed" => array(
                ARTICLE_ID      => "",
                ARTICLE_TITLE   => "Feed App",
                ARTICLE_URL     => "feed"
            ),
            "map" => array(
                ARTICLE_ID      => "custom-1399906747900",
                ARTICLE_TITLE   => "Map App",
                ARTICLE_URL     => "map"
            )
        );
    }
    
    function get_article($url)
    {
        return $this->CACHE[$url];
    }   

    function get_all()
    {
        return $this->CACHE;
    }

}