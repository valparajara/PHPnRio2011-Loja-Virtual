<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Lojinha do CakePHP</title>
	
	<meta name="description" content="..." />
	<meta name="author" content="Thiago Belem, PHP'n Rio 2011" />
	
	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	
	<!-- CSS -->
	<link rel="stylesheet" href="http://twitter.github.com/bootstrap/1.4.0/bootstrap.min.css" />
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans|Chewy" />
	
	<?php echo $this->Html->css('estilo') ?>	
</head>
<body>
	<div class="container">
		<div class="hero-unit">
			<h1><?php echo $this->Html->link('Lojinha do CakePHP', '/') ?></h1>
			<p>Gadgets, canecas, camisetas e bottoms pra você, fã do <strong>framework de PHP</strong> mais legal do mundo</p>
		</div>
		
		<?php echo $content_for_layout ?>
		
		<footer>
			<p><a href="http://assando-sites.com.br">Assando Sites</a>, curso online de <strong>CakePHP</strong></p>
			<p class="powered">Powered by <a href="http://cakephp.org">CakePHP</a>&trade;</p>
		</footer>
		
		<?php echo $this->element('sql_dump') ?>
	</div>
</body>
</html>