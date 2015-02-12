<h1><?=${DATA_BODY}[ARTICLE_TITLE]?></h1>
<p>This page provides an example of the <a href="http://docs.livefyre.com/developers/reference/app-types/reviews/" target="_blank">Live Reviews</a> app, which is part of StreamHub Core.</p>

<div id="livefyre"></div>

<script type="text/javascript">

	var lfepConfig = {
		engageOpts: {app: '<?=LFEP_APP?>'}
	}

	var customStrings = {
		ratingSubpartPlaceholders: ['Pros...','Cons...','Favorite Thing...'],
		ratingSubpartTitles: ['Pros: ','Cons: ','Favorite Thing: '],
		reviewStreamTitle: 'Your Review:'
	};

    var networkConfig = {
		network: '<?=LIVEFYRE_NETWORK?>',
		strings: customStrings
	}

	var convConfig = {
		siteId: '<?=LIVEFYRE_SITE_ID?>',
		articleId: '<?=${DATA_BODY}[ARTICLE_ID]?>',
		el: 'livefyre',
		collectionMeta: '<?=${DATA_BODY}[COLLECTION_META]?>', 
		app: 'reviews',
		ratingSubparts: 3,
		ratingSummaryEnabled: true,
		maxRating: 5, 
		enableHalfRating: true
	}

	Livefyre.require(
		['fyre.conv#3','auth','lfep-auth-delegate#0'],
		function(Review, Auth, LFEPDelegate){
			var lfepAuthDelegate = new LFEPDelegate(lfepConfig);
			Auth.delegate(lfepAuthDelegate);
			new Review(networkConfig,[convConfig],function(widget){});
		}
	);

</script>
