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
            "liveblog" => array(
                ARTICLE_ID      => DEMO_ARTICLE_ID_PREFIX."0002",
                ARTICLE_TITLE   => "Live Blog",
                ARTICLE_URL     => "liveblog", 
                COLLECTION_TYPE => TYPE_LIVEBLOG
            ),
            "livechat" => array(
                ARTICLE_ID      => DEMO_ARTICLE_ID_PREFIX."0003",
                ARTICLE_TITLE   => "Live Chat",
                ARTICLE_URL     => "livechat", 
                COLLECTION_TYPE => TYPE_LIVECHAT
            ),
            "livereviews" => array(
                ARTICLE_ID      => DEMO_ARTICLE_ID_PREFIX."0004",
                ARTICLE_TITLE   => "Live Reviews",
                ARTICLE_URL     => "livereviews", 
                COLLECTION_TYPE => TYPE_LIVEREVIEWS
            ),
            "sidenotes" => array(
                ARTICLE_ID      => DEMO_ARTICLE_ID_PREFIX."sn_0001",
                ARTICLE_TITLE   => "Sidenotes",
                ARTICLE_URL     => "sidenotes", 
                COLLECTION_TYPE => TYPE_SIDENOTES
            ),
            "mediawall" => array(
                ARTICLE_ID      => "",
                ARTICLE_TITLE   => "Media Wall",
                ARTICLE_URL     => "mediawall"
            ),
            "gallery" => array(
                ARTICLE_ID      => "",
                ARTICLE_TITLE   => "Streamhub Gallery",
                ARTICLE_URL     => "gallery"
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