<!DOCTYPE html>
<html lang="<cubo:param name='language' />" itemscope itemtype="https://schema.org/WebPage">
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="/template/stylesheet/<cubo:param name='template' />?minify" />
	<link rel="icon" type="image/png" href="/vendor/cubo-cms/asset/image/cubo-b192.png" />
	<script defer src="https://use.fontawesome.com/releases/v5.7.2/js/solid.js" integrity="sha384-6FXzJ8R8IC4v/SKPI8oOcRrUkJU8uvFK6YJ4eDY11bJQz4lRw5/wGthflEOX8hjL" crossorigin="anonymous"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.7.2/js/fontawesome.js" integrity="sha384-xl26xwG2NVtJDw2/96Lmg09++ZjrXPc89j0j7JHjLOdSwHDHPHiucUjfllW0Ywrq" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<cubo:head />
</head>
<body class="has-fixed-nav">
	<nav id="navigation" class="fixed-top bg-primary">
		<div class="navbar navbar-expand-md navbar-dark bg-primary justify-content-between container" role="menu">
			<div class="navbar-nav mr-auto d-md-none"><a class="nav-link" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation"><span class="circle"><i class="fa fa-bars"></i></span></a></div>
			<cubo:module name="logo" content="style=cubo-cms" />
			<div class="navbar-nav ml-auto d-md-none"><cubo:module name="user" content="" /></div>
			<div id="navbar-menu" class="collapse navbar-collapse"><cubo:module name="menu" content="" /></div>
			<div class="navbar-nav ml-auto d-none d-md-block"><cubo:module name="user" content="" /></div>
		</div>
	</nav>
	<header id="header">
		<section id="header-content" role="info">
			<cubo:module name="header" content="" />
		</section>
	</header>
	<section id="message">
		<section class="container" id="message-content" role="message">
			<cubo:message />
		</div>
	</section>
	<main id="main">
		<section class="container" id="main-content" role="main">
			<cubo:content />
		</section>
	</main>
	<footer id="footer" class="fixed-bottom bg-primary">
		<div class="navbar navbar-expand-md navbar-dark bg-primary justify-content-between container" role="info">
			<cubo:module name="footer" content="" />
		</div>
	</footer>
</body>
</html>