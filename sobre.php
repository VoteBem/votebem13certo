<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
		<link type="text/css" rel="stylesheet" href="css/estilo.css" media="screen,projection" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta charset="utf-8" />
		<title>Vote Bem - Sobre o Movimento</title>
		<link rel="icon" href="../imgs/favicon.ico">
		<style>
			.cor {
				color: #2196F3;
				font-size: 28px;
			}
			
			#sobre {
				margin-top: 50px;
				font-size: 20px;
				margin-bottom: 15px;
			}
			
			.cartao1 {
				margin-top: 15px;
				font-size: 18px;
				text-align: right;
				color: #2196F3;
			}
		</style>
	</head>
	<body>
		<main>
			<?php include "PaginasProcessamento/nav.php"; ?>
			<nav class="hide-on-small-only">
				<div class="nav-wrapper blue espacamento-lateral">
					<div class="col s12">
						<a href="index.php" class="breadcrumb">Home</a>
						<a href="sobre.html" class="breadcrumb">Sobre o movimento</a>
					</div>
				</div>
			</nav>	
			<div class="container">
				<h1 class="center">Sobre o Movimento</h1>
				<h2 class="cor center">O que é o Movimento Vote Bem ?</h2>
				<p id="sobre">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu metus porta, faucibus ex in, egestas libero. Nam dignissim pretium feugiat. 
					Fusce cursus dapibus suscipit. Proin hendrerit non sapien sit amet tincidunt. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean
					interdum eu nisi non tristique. Integer quis condimentum metus. Aliquam pharetra, enim sit amet mattis rhoncus, lorem arcu tristique mauris, laoreet tincidunt elit felis non est. Duis at lacinia metus.
					dcipit. Proin hendrerit non snteges.  
				</p>
			</div>
			<div class="container">
				<div class="row">
					<div class="col s12">
						<div class="card horizontal">
							<div class="card-image">
								<img src="imgs/sobre/user-shape.png" class="responsive-img">
							</div>
							<div class="card-stacked">
								<div class="card-content">
									<p class="flow-text">"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."</p>
									<div class="right-align flow-text cartao1">- Finibus Bonorum</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col s12">
						<div class="card horizontal">
							<div class="card-image">
								<img src="imgs/sobre/user-shape.png" class="responsive-img">
							</div>
							<div class="card-stacked">
								<div class="card-content">
									<p class="flow-text">"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."</p>
									<div class="right-align flow-text cartao1">- Finibus Bonorum</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		<footer class="page-footer blue">
			<div class="container">
				<div class="row">
					<div class="col l6 s12">
						<p><a href="index.php"></a><img src="imgs/footer-logo.png"></p>
					</div>
					<div class="col l4 offset-l2 s12">
						<h5 class="white-text">Compartilhe</h5>
						<ul>
							<li><a class="grey-text text-lighten-3" href="#!">Twitter</a></li>
							<li><a class="grey-text text-lighten-3" href="#!">Facebook</a></li>
							<li><a class="grey-text text-lighten-3" href="#!">Instagram</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="footer-copyright">
				<div class="container">
					© 2017 Copyright - Todos os direitos reservados
				</div>
			</div>
		</footer>
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
		<script type="text/javascript" src="js/custom.js"></script>
	</body>
</html>