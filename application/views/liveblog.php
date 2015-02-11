<h1><?=${DATA_BODY}[ARTICLE_TITLE]?></h1>
<p>This page provides an example of the <a href="http://docs.livefyre.com/developers/reference/app-types/core-apps/" target="_blank">LiveBlog</a> app, which is part of StreamHub Core.</p>

<div class="row span-4">
	<div id="livefyre"></div>
</div>

<script type="text/javascript">
	
	var networkConfig = {
		network: '<?=LIVEFYRE_NETWORK?>'
	}

	var convConfig = {
		siteId: '<?=LIVEFYRE_SITE_ID?>',
		articleId: '<?=${DATA_BODY}[ARTICLE_ID]?>',
		el: 'livefyre',
		collectionMeta: '<?=${DATA_BODY}[COLLECTION_META]?>'
	}

	var lfepConfig = {
		engageOpts: {app: '<?=LFEP_APP?>'}
	}

	Livefyre.require(
		['fyre.conv#3','auth','lfep-auth-delegate#0'],
		function(Conv, Auth, LFEPDelegate){
			var lfepAuthDelegate = new LFEPDelegate(lfepConfig);
			Auth.delegate(lfepAuthDelegate);
			new Conv(networkConfig,[convConfig],function(widget){});
		}
	);
	

</script>
