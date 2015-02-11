<h1><?=${DATA_BODY}[ARTICLE_TITLE]?></h1>
<p>This page provides an example of the <a href="http://answers.livefyre.com/developers/app-integrations/feed/" target="_blank">Feed</a> app.</p>

<div style="width:60%; margin:auto;">
	<div id="livefyre"></div>
</div>

<script type="text/javascript">

	var collectionConfig = {
	    network: '<?=LIVEFYRE_NETWORK?>',
	    siteId: '<?=LIVEFYRE_SITE_ID?>',
	    articleId: '<?=${DATA_BODY}[ARTICLE_ID]?>'
	};

	var feedConfig = {
		el: document.getElementById('livefyre')
	};

	Livefyre.require(
		['streamhub-feed#3', 'streamhub-sdk#3'],
		function(Feed, SDK){
			var collection = new SDK.Collection(collectionConfig);
			var feed = new Feed(feedConfig);
			collection.pipe(feed);
		}
	);

	

</script>
