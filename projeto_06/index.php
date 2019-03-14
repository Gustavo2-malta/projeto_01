<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width;initial-scale=1.0;maximum-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet">
	<title>ELETROJAC</title>
</head>
<body>
	<section class="main">
		<div class="layer"></div>
		<div class="center">
			<header>
				
				<div class="clear"></div>
				<div class="logo">
					ELETROJAC
				</div><!--logo-->
				<nav class="desktop">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="">Sobre</a></li>
						<li><a href="">Contato</a></li>
					</ul>
				</nav>
				<nav class="mobile">
					<i class="fa fa-bars"></i>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="">Sobre</a></li>
						<li><a href="">Contato</a></li>
					</ul>	
				</nav>
				<div class="clear"></div>
			</header>
			<div class="conteudo-header">
				<h2>Bem-vindo(a) a nossa <span>empresa!</span></h2>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit i</p>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit i</p>
				<a href="">Saiba mais!</a>
			</div><!--conteudo-header-->
		</div><!--center-->
	</section><!--main-->

	<section class="planos">
		<div class="chamada-planos">
		<div class="center">
			<h2>Confira nossos planos</h2>
		</div>	
		</div><!--chamada-planos-->
		<section class="box-planos">	
			<div class="center">
				<div class="box-planos-single">
					<div class="box-planos-wraper">
					<h2>Lorem ipsum</h2>
					<div class="pontos-plano">
						<p><i class="fa fa-check-square"></i> Lorem ipsum silor domor</p>
						<p><i class="fa fa-check-square"></i> Lorem ipsum silor domor</p>
						<p><i class="fa fa-check-square"></i> Lorem ipsum silor domor</p>
						<p><i class="fa fa-check-square"></i> Lorem ipsum silor domor</p>
					</div><!--pontos-plano-->
					<div class="preco">
						<h2>R$250,00</h2>
					</div><!--preco-->
					</div>
				</div><!--box-planos-single-->
			
			<div class="box-planos-single">
			<div class="box-planos-wraper">
					<h2>Lorem ipsum</h2>
					<div class="pontos-plano">
						<p><i class="fa fa-check-square"></i> Lorem ipsum silor domor</p>
						<p><i class="fa fa-check-square"></i> Lorem ipsum silor domor</p>
						<p><i class="fa fa-check-square"></i> Lorem ipsum silor domor</p>
						<p><i class="fa fa-check-square"></i> Lorem ipsum silor domor</p>
					</div><!--pontos-plano-->
					<div class="preco">
						<h2>R$250,00</h2>
					</div><!--preco-->
				</div>
			</div><!--box-planos-single-->

			<div class="box-planos-single">
			<div class="box-planos-wraper">
					<h2>Lorem ipsum</h2>
					<div class="pontos-plano">
						<p><i class="fa fa-check-square"></i> Lorem ipsum silor domor</p>
						<p><i class="fa fa-check-square"></i> Lorem ipsum silor domor</p>
						<p><i class="fa fa-check-square"></i> Lorem ipsum silor domor</p>
						<p><i class="fa fa-check-square"></i> Lorem ipsum silor domor</p>
					</div><!--pontos-plano-->
					<div class="preco">
						<h2>R$250,00</h2>
					</div><!--preco-->
					</div>
				</div><!--box-planos-single-->

			</div><!--center-->
		</section><!--box-planos-->
	</section>

	<section class="parallax">
		<div class="overlay-parallax"></div>
		<div class="center">
			<h2>Sobre nossa <span style="color: #2692FF;">empresa</span></h2>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
		</div>
	</section>
	
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script>
		$(function(){
			$('nav.mobile i').click(function(){
				var el = $(this).parent().find('ul');
				if(el.is(':visible') == false){
				 el.fadeIn();
				}else{
					el.fadeOut();
				}
			})
		})
	</script>
</body>
</html>