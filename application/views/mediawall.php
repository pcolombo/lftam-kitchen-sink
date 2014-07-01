<h1><?=${DATA_BODY}[ARTICLE_TITLE]?></h1>
<p>This page provides an example of the <a href="http://apps.livefyre.com/packages/Livefyre/streamhub-wall/master/overview" target="_blank">Media Wall</a> app.</p>

<div id="livefyre"></div>

<script src="http://cdn.livefyre.com/libs/sdk/v2.7.0/streamhub-sdk.min.js"></script>
<script src="http://cdn.livefyre.com/libs/apps/Livefyre/streamhub-wall/v2.3.0-build.184/streamhub-wall.min.js"></script>
<link rel="stylesheet" href="http://cdn.livefyre.com/libs/sdk/v2.7.0/streamhub-sdk.min.css" />


<script type="text/javascript">

	var MediaWall = Livefyre.require('streamhub-wall');
    var Collection = Livefyre.require('streamhub-sdk/collection');

	var wallView = new MediaWall({
    	el: document.getElementById('livefyre'),
    	initial: 10, 
    	showMore: 5
	});
	
	var wallViewCollection = new Collection({
	    network: '<?=LIVEFYRE_NETWORK?>',
	    siteId: '<?=LIVEFYRE_SITE_ID?>',
	    articleId: '<?=${DATA_BODY}[ARTICLE_ID]?>'
	});

	wallViewCollection.pipe(wallView);

</script>

