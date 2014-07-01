<h1><?=${DATA_BODY}[ARTICLE_TITLE]?></h1>
<p>This page provides an example of the <a href="http://apps.livefyre.com/packages/Livefyre/streamhub-gallery/master/overview" target="_blank">Gallery</a> app.</p>

<div id="livefyre"></div>

<script src="http://cdn.livefyre.com/libs/sdk/v2.7.0/streamhub-sdk.min.js"></script>
<script src="http://cdn.livefyre.com/libs/apps/Livefyre/streamhub-gallery/v0.2.2-build.14/streamhub-gallery.min.js"></script>
<link rel="stylesheet" href="http://cdn.livefyre.com/libs/sdk/v2.7.0/streamhub-sdk.min.css" />

<script type="text/javascript">

	var AppView = Livefyre.require('streamhub-gallery');

	var appView = new AppView({
    	el: document.getElementById('livefyre')
	});

	var Collection = Livefyre.require('streamhub-sdk/collection');
	
	var collection = new Collection({
	    network: '<?=LIVEFYRE_NETWORK?>',
	    siteId: '<?=LIVEFYRE_SITE_ID?>',
	    articleId: '<?=${DATA_BODY}[ARTICLE_ID]?>'
	});

	collection.pipe(appView);

	

</script>
