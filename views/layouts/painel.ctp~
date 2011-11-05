<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Painel de Controle</title>
	
	<meta name="description" content="..." />
	<meta name="author" content="Thiago Belem, PHP'n Rio 2011" />
	
	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	
	<!-- CSS -->
	<link rel="stylesheet" href="http://twitter.github.com/bootstrap/1.4.0/bootstrap.min.css" />
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans|Chewy" />
	
	<?php echo $this->Html->css(array('estilo', 'painel')) ?>	
</head>
<body>
	<div class="container">
		<h1>Painel de Controle</h1>
		
		<?php if ($this->Session->read('Auth.User')) { ?>
		<h2>Olá, <?php echo $this->Session->read('Auth.User.name') ?> - <?php echo $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout')) ?></h2>
		<?php } ?>
		
		<?php echo $content_for_layout ?>
		
		<?php echo $this->element('sql_dump') ?>
	</div>
</body>
</html>
