<h1><?=${DATA_BODY}[ARTICLE_TITLE]?></h1>
<p>This page provides an example of <a href="http://answers.livefyre.com/developers/app-integrations/media-wall/" target="_blank">Media Wall</a> app, with Auth and user uploads enabled.</p>

<div id="livefyre"></div>

<script type="text/javascript">

	var collectionConfig = {
	    network: '<?=LIVEFYRE_NETWORK?>',
	    siteId: '<?=LIVEFYRE_SITE_ID?>',
	    articleId: '<?=${DATA_BODY}[ARTICLE_ID]?>'
	};

	var wallConfig = {
		el: document.getElementById('livefyre'),
		columns: 3,
	    postButton: 'contentWithPhoto'
	};

	var lfepConfig = {
		engageOpts: {app: '<?=LFEP_APP?>'}
	}

	Livefyre.require(
		['streamhub-wall#3','streamhub-sdk#2','auth','lfep-auth-delegate#0'],
		function(Wall, SDK, Auth, LFEPDelegate){
			var lfepAuthDelegate = new LFEPDelegate(lfepConfig);
			Auth.delegate(lfepAuthDelegate);
			var collection = new SDK.Collection(collectionConfig);
			wallConfig.collection = collection;
			new Wall(wallConfig);
			console.dir(Wall.postButtons);
		}
	);

</script>

