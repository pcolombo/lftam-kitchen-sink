<h1><?=${DATA_BODY}[ARTICLE_TITLE]?></h1>
<p>This page provides an example of the <a href="http://answers.livefyre.com/developers/app-integrations/maps/" target="_blank">Map</a> app.</p>

<div style="width: 640px; margin:auto;">
	<div id="livefyre" style="height: 500px;"></div>
</div>

<script type="text/javascript">

	var collectionConfig = {
	    network: '<?=LIVEFYRE_NETWORK?>',
	    siteId: '<?=LIVEFYRE_SITE_ID?>',
	    articleId: '<?=${DATA_BODY}[ARTICLE_ID]?>'
	};

	var mapConfig = {
		el: document.getElementById('livefyre'),
		leafletMapOptions: {
			center: [40.742054,-73.987984],
			zoom: 13
		}
	};

	Livefyre.require(
		['streamhub-map#1', 'streamhub-sdk#2'],
		function(Map, SDK){
			var collection = new SDK.Collection(collectionConfig);
			var map = new Map(mapConfig);
			collection.pipe(map);
		}
	);

	

</script>
