<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
	
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/">Home</a>
		</div>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<?php 
					foreach (${DATA_NAV} as $n) {
						$str = '<li';
						if($n[ARTICLE_URL] == $this->uri->segment(1)) $str .= ' class="active"';
						$str .= '><a href="/'.$n[ARTICLE_URL].'"';
						$str .= '>'.$n[ARTICLE_TITLE].'</a></li>';
						echo $str;
					}
				?>
			</ul>
		</div>

	</div><!-- /.container-fluid -->
</nav>