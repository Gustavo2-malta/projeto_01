<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Projeto</title>
	 <link href="<?php echo INCLUDE_PATH; ?>css/all.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" ref="stylesheet">
	<link href="<?php echo INCLUDE_PATH; ?>css/style.css" rel="stylesheet"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8"/> 
</head>
<body>
	
	<header>
			<div class="center">
			<div class="logo left"><a href="<?php echo INCLUDE_PATH; ?>"> Logomarca</a></div><!--logo-->
			<nav class="desktop right">
					<ul>
							<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
							<li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
							<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
							<li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
					</ul>
				
			</nav>
				<nav class="mobile right">
				<div class="botao-menu-mobile">
					<i class="fas fa-bars"></i>
				</div>
					<ul>
							<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
							<li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
							<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
							<li><a href="<?php echo INCLUDE_PATH; ?>/contato">Contato</a></li>
					</ul>
				
			</nav>
			<div class="clear"></div>
		</div><!--center-->
	</header>

	<?php
		$url = isset($_GET['url']) ? $_GET['url'] : 'home';	
		
		if (file_exists('pages/'.$url.'.php')){
			include('pages/'.$url.'.php');
			
		}else{
			//Podemos fazer o que quiser pois a página não existe
			include('pages/404.php');
		}
	?>


	
	<footer>
		<div class="center">
				<p>Todos os Direitos reservados</p>
		</div><!--center-->
	</footer>
	<script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>

	<script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>

 
</body>
</html>