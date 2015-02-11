<h1><?=${DATA_BODY}[ARTICLE_TITLE]?></h1>
<p>This page provides an example of the <a href="http://answers.livefyre.com/developers/app-integrations/gallery/" target="_blank">Gallery</a> app.</p>

<div id="livefyre"></div>

<script type="text/javascript">

	var collectionConfig = {
	    network: '<?=LIVEFYRE_NETWORK?>',
	    siteId: '<?=LIVEFYRE_SITE_ID?>',
	    articleId: '<?=${DATA_BODY}[ARTICLE_ID]?>'
	};

	var galleryConfig = {
		el: document.getElementById('livefyre')
	};

	Livefyre.require(
		['streamhub-gallery#0', 'streamhub-sdk#2'],
		function(Gallery, SDK){
			var collection = new SDK.Collection(collectionConfig);
			var gallery = new Gallery(galleryConfig);
			collection.pipe(gallery);
		}
	);

	

</script>
