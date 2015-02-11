<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes whchen working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');

/*
|--------------------------------------------------------------------------
| Livefyre Configuration
|--------------------------------------------------------------------------
|
| Keys for Livefyre integration
|
*/

/* Production Network */
define('LIVEFYRE_NETWORK',				'client-solutions.fyre.co');
define('LIVEFYRE_NETWORK_SECRET', 		'-get this from powertools-');
define('LIVEFYRE_SITE_ID', 				'YOUR SITE ID');
define('LIVEFYRE_SITE_KEY',				'YOUR SITE KEY');
define('LIVEFYRE_SITE_URL', 			'YOUR SITE URL');
define('LFEP_URL',						'http://client-solutions.ep.livefyre.com/media/Y2xpZW50LXNvbHV0aW9ucy5lcC5saXZlZnlyZS5jb20=/javascripts/customprofiles.js');
define('LFEP_APP',						'client-solutions.auth.fyre.co');


/* UAT Network 
define('LIVEFYRE_NETWORK',				'client-solutions-uat.fyre.co');
define('LIVEFYRE_NETWORK_SECRET', 		'--get this from powertools--');
define('LIVEFYRE_SITE_ID', 				'YOUR UAT SITE ID');
define('LIVEFYRE_SITE_KEY',				'YOUR UAT SITE KEY');
define('LIVEFYRE_SITE_URL', 			'YOUR UAT SITE URL');
*/

define('DEMO_ARTICLE_ID_PREFIX',		'YOURUSERNAME_local_');

// LF App Types
define('TYPE_LIVEBLOG',					'liveblog');
define('TYPE_LIVECHAT',					'livechat');
define('TYPE_LIVEREVIEWS',				'reviews');
define('TYPE_SIDENOTES',				'sidenotes');
define('TYPE_RATINGS',					'ratings');

// Array Keys
define('ARTICLE_ID',					'articleid');
define('ARTICLE_TITLE', 				'articletitle');
define('ARTICLE_URL', 					'articleurl');
define('ARTICLE_TAGS',					'articletags');
define('COLLECTION_TYPE',				'collectiontype');
define('COLLECTION_META', 				'collectionmeta');

// View Data Containers
define('DATA_NAV',						'datanav');
define('DATA_BODY',						'databody');


/* End of file constants.php */
/* Location: ./application/config/constants.php */