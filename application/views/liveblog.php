<h1><?=${DATA_BODY}[ARTICLE_TITLE]?></h1>
<p>This page provides an example of the <a href="http://docs.livefyre.com/developers/reference/app-types/core-apps/" target="_blank">LiveBlog</a> app, which is part of StreamHub Core.</p>

<div class="row span-4">
	<div id="livefyre"></div>
</div>

<script type="text/javascript">

	var theAuthDelegate = new fyre.conv.SPAuthDelegate({engage: {app: "client-solutions.auth.fyre.co"}});
	
	var networkConfig = {
		network: '<?=LIVEFYRE_NETWORK?>',
		authDelegate: theAuthDelegate
	}

	var convConfig = {
		siteId: '<?=LIVEFYRE_SITE_ID?>',
		articleId: '<?=${DATA_BODY}[ARTICLE_ID]?>',
		el: 'livefyre',
		collectionMeta: '<?=${DATA_BODY}[COLLECTION_META]?>'
	}

	fyre.conv.load( networkConfig, [convConfig] );

</script>
