<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('lf_get_collection_meta'))
{
    function lf_get_collection_meta($params)
    {
        $collectionMeta = array(
        	"title" => $params[ARTICLE_TITLE],
        	"url"	=> base_url().$params[ARTICLE_URL]
        );

        // Optional Params
       	if ( array_key_exists(ARTICLE_TAGS,$params) ) $collectionMeta["tags"] = $params[ARTICLE_TAGS];
        if ( array_key_exists(COLLECTION_TYPE,$params) ) $collectionMeta["type"] = $params[COLLECTION_TYPE];

		$checksum = md5(json_encode($collectionMeta));
		
        $collectionMeta['checksum'] = $checksum;
		$collectionMeta['articleId'] = $params[ARTICLE_ID];
		
		return JWT::encode($collectionMeta, LIVEFYRE_SITE_KEY);
    }
}
