<h1><?=${DATA_BODY}[ARTICLE_TITLE]?></h1>
<p>This page provides an example of <a href="http://vimeo.com/livefyre/introducing-sidenotes" target="_blank">Sidenotes</a>, which is incredibly awesome.</p>


<div class="row" style="margin-top: 50px; margin-bottom: 150px;">
	<div class="col-md-8 col-md-offset-2">
		<p class="lf-sidenotes">Pug gluten-free lo-fi, cardigan Etsy DIY cornhole post-ironic pork belly mixtape Intelligentsia Pinterest Schlitz. Wes Anderson slow-carb ugh yr sartorial. </p>

		<p class="lf-sidenotes">Single-origin coffee sriracha retro Schlitz, banh mi blog hashtag fingerstache Blue Bottle distillery Intelligentsia literally photo booth salvia. Tousled Wes Anderson Carles art party ethical. Austin Williamsburg Truffaut art party, seitan Shoreditch pork belly. Meggings keffiyeh kogi Truffaut 3 wolf moon roof party, try-hard freegan Neutra. Bitters fixie banjo, XOXO skateboard tattooed bespoke sriracha Tonx chia cardigan umami kogi.</p>

		<p class="text-center">
			<img class="lf-sidenotes" src="/assets/morrissey.jpg" />
		</p>

		<p class="lf-sidenotes">Roof party Pinterest swag plaid readymade fixie Etsy actually. YOLO authentic bicycle rights Williamsburg you probably haven't heard of them chia vegan. Pickled photo booth American Apparel, DIY narwhal +1 Tonx YOLO bitters.</p> 

		<p class="lf-sidenotes">Occupy artisan lo-fi, 3 wolf moon Pinterest Thundercats aesthetic PBR&amp;B stumptown tattooed ethnic semiotics tousled normcore. PBR&amp;B High Life iPhone fashion axe hashtag. American Apparel forage keytar wolf PBR slow-carb.</p>
		
		<p class="lf-sidenotes text-center">
			<iframe width="420" height="315" src="//www.youtube.com/embed/d5rUOR3HQhY" frameborder="0" allowfullscreen></iframe>
		</p>

	</div>
</div>


<script src="http://cdn.livefyre.com/libs/sidenotes/v0.1.0-beta/sidenotes.min.js"></script>
<script type="text/javascript">

	var lfepAuthDelegate = new fyre.conv.SPAuthDelegate({engage: {app: "client-solutions.auth.fyre.co"}});
	
	var convConfig = {
		network: '<?=LIVEFYRE_NETWORK?>',
		authDelegate: lfepAuthDelegate,
		selectors: '.lf-sidenotes',
		siteId: '<?=LIVEFYRE_SITE_ID?>',
		articleId: '<?=${DATA_BODY}[ARTICLE_ID]?>',
		el: 'livefyre',
		collectionMeta: '<?=${DATA_BODY}[COLLECTION_META]?>', 
		position: 'bottom',
		commenting_enabled: false
	}

	new Livefyre.Sidenotes(convConfig);

</script>
