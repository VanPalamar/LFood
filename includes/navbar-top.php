<header id="header" role="banner">
		<div class="container">
			<div id="navbar" class="navbar navbar-default">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php"></a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav">

						<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Accueil</a></li>
						<?php if(!isset($_GET["page"])) { echo '
						<li><a href="#sandwiches"><span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span> Sandwichs</a></li>
						<li><a href="#pizza"><span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span> Pizzas</a></li>
						<li><a href="#desserts"><span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span> Desserts</a></li>
						';}
						?>
					</ul>
				</div>
			</div>
		</div>
	</header><!--/#header-->