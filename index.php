<?php include('config.php'); ?> 
<!DOCTYPE html>
<html>
<head>
	<title>Projeto 01</title>
	<link rel="stylesheet" href="estilo/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH;?>estilo/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
	<meta name="vieweport" content="width=device-width,inicial-scale=1.0">
	<meta name="keywords" content="Palavra-chave do site">
	<meta name="description" content="Descricao do meu site">
	<meta charset="utf-8">
</head>
<body>
 
	<header>
		<div class="center">
		<div class="logo left"><a href="">LK design</a></div>
		<nav class="desktop right">
			<ul>
				<li><a href="#">Home</a></li>
				 <li><a href="#">Sobre</a></li>
				 <li><a href="#">Servicos</a></li>
				 <li><a href="#">Contato</a></li>
			</ul>
		</nav>
		<nav class="mobile right">
			<div class="botao-menu-mobile">
				<i class="fa fa-bars" aria-hidden="true"></i>
			</div>
			<ul>
				 <li><a href="#">Home</a></li>
				 <li><a href="#">Sobre</a></li>
				 <li><a href="#">Servicos</a></li>
				 <li><a href="#">Contato</a></li>
			</ul>
		</nav>
		<div class="clear"></div>	
		</div><!--center-->
	</header>

	<section class="banner-principal">
		<div class="overlay"></div>
		<div class="center">
		<form method="POST">
			<h2>Qual o seu melhor email?</h2>
			<input type="email" name="email" required />
			<input type="submit" name="acao" value="Cadastrar!" />
		</form>
	</div><!--center-->

	</section><!--BANNER PRINCIPAL-->

	<section class="descricao-autor">
		<div class="center">
		<div class="w50 left">
			<h2>Lucas Tavares</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			llit anim id est laborum.</p>
		</div>	<!--w50L-->

		<div class="w50 left">
		
			<img src="imagens\logo.jpg" class="right img-autor" >
		</div>	<!--w50L-->
		<div class="clear"></div>
		</div><!--center-->
	</section>	<!--BANNER autor-->

	<section class="especialidades">
		<div class="center">
		<h2 class="title">Especialidades</h2>	
			<div class=" w33 left box-especialidades">
				<h3><i class="fa fa-video-camera" aria-hidden="true"></i></i></h3>
				<h4>VIDEO MAKER</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip .</p>
			</div><!-- box-especialidades-->
			<div class="w33 left box-especialidades">
				<h3><i class="fa fa-picture-o" aria-hidden="true"></i></h3>
				<h4>PHOTOSHOP</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip .</p>
			</div><!-- box-especialidades-->
			<div class="w33 left box-especialidades">
				<h3><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></h3>
				<h4>THUMBS</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip .</p>
				</div><!-- box-especialidades-->
				<div class="clear"></div>
		</div><!--center-->
	</section><!--especialidades-->

	

	<section class="extras">

		<div class="center">
			<div class="w50 left Depoimentos-container">
			<h2 class="title">Depoimentos</h2>
			<div class="Depoimentos-single">
				<p class="Depoimento-descricao">" Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum. "</p>
				<p class="nome-autor">lorem Ipsum</p>
			</div><!--Depoimentos-single-->
			<div class="Depoimentos-single">
				<p class="Depoimento-descricao"> " Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum. "</p>
				<p class="nome-autor">lorem Ipsum</p>
			</div><!--Depoimentos-single-->
			<div class="Depoimentos-single">
				<p class="Depoimento-descricao">" Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum. "</p>
				<p class="nome-autor">lorem Ipsum</p>
			</div><!--Depoimentos-single-->
		</div><!--w50-->
		<div class="w50 left servicos-container" >
			<h2 class="title">Servicos</h2>
			<div class="Servicos">
				<ul>
					<li>amet, consectetur adipisicing elit, sed do eiusmod
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia </li>
				<li>amet, consectetur adipisicing elit, sed do eiusmod
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia </li>
				<li>amet, consectetur adipisicing elit, sed do eiusmod
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia </li>

				</ul>
			</div><!--servicos-->
		</div>	<!--w50L-->
		<div class="clear"></div>
		</div><!--center-->
	</section><!--extras-->

	<footer>
		<div class="center">
		<p>Todos os direitos reservados</p>
		</div><!--center-->
	</footer>
	
</body>
</html>
<script src="js/jquery.js"></script>
<script src="js/scripts.js"></script>

