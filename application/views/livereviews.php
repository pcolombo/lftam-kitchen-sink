<h1><?=${DATA_BODY}[ARTICLE_TITLE]?></h1>
<p>This page provides an example of the <a href="http://docs.livefyre.com/developers/reference/app-types/reviews/" target="_blank">Live Reviews</a> app, which is part of StreamHub Core.</p>

<div id="livefyre">Coming soon!</div>

<script type="text/javascript">

	var lfepAuthDelegate = new fyre.conv.SPAuthDelegate({engage: {app: "client-solutions.auth.fyre.co"}});

	var customStrings = {
		ratingSubpartPlaceholders: ['This...','That...','The Other...'],
		ratingSubpartTitles: ['This:','That:','The Other:'],
		reviewStreamTitle: 'Overall Impressions:'
	};

    var networkConfig = {
		network: '<?=LIVEFYRE_NETWORK?>',
		authDelegate: lfepAuthDelegate,
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

	fyre.conv.load(networkConfig, [convConfig]);

</script>
