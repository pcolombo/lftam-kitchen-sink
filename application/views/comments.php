<h1><?=${DATA_BODY}[ARTICLE_TITLE]?></h1>
<p>This page provides an example of the <a href="http://docs.livefyre.com/product/livefyre-apps/livecomments/" target="_blank">LiveComments</a> app, which is part of StreamHub Core.</p>

<div id="livefyre"></div>

<script type="text/javascript">

	var networkConfig = {
		network: '<?=LIVEFYRE_NETWORK?>'
	}

	var customActionButtons = [
	{
		key: "Custom Button!",
		callback: function(contentinfo){alert("You clicked a custom action button!");}
	}
	];

	var convConfig = {
		siteId: '<?=LIVEFYRE_SITE_ID?>',
		articleId: '<?=${DATA_BODY}[ARTICLE_ID]?>',
		el: 'livefyre',
		collectionMeta: '<?=${DATA_BODY}[COLLECTION_META]?>', 
		actionButtons: customActionButtons
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
