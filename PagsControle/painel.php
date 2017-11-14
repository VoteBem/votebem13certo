<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Vote Bem - Painel de Controle</title>
		<link rel="icon" href="../imgs/favicon.ico">
		<meta charset="UTF-8">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
		<link rel="stylesheet" href="../css/estilo.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	</head>
		<?php 
	session_start(); //verificar session
	if(isset($_SESSION['login'])){
		if($_SESSION['login'] == 1){
		}else{
			header("Location: ../login.php");
		}
	}else{
		header("Location: ../login.php");
		session_destroy();
	}
?>
	<body>
		<main>
			<?php include "../PaginasProcessamento/nav2.php"; ?>
				<nav>
					<div class="nav-wrapper blue espacamento-lateral">
						<div class="col s12">
							<a href="../index.php" class="breadcrumb">Home</a>
							<a href="painel.php" class="breadcrumb">Painel de Controle</a>
						</div>
					</div>
				</nav>			
			<div class="container">
				<div class="row">
					<div class="col s12">
						<h2 class="center">Painel de Controle</h2>
					</div>	
				</div>
				<div class="row">
					<div class="col s12 m6 l4">
						<div class="card">
							<div class="card-image">
								<img src="../imgs/painel/user.png">
							</div>
							<div class="card-action center">
								<a href="#" class="blue-text">Usuários</a>
							</div>
						</div>
					</div>
					<div class="col s12 m6 l4">
						<div class="card">
							<div class="card-image">
								<img src="../imgs/painel/chat.png" class="responsive-img">
							</div>
							<div class="card-action center">
								<a href="#" class="blue-text">Fórum</a>
							</div>
						</div>
					</div>
					<div class="col s12 m6 l4">
						<div class="card">
							<div class="card-image">
								<img src="../imgs/painel/noticias1.png" class="responsive-img">
							</div>
							<div class="card-action center">
								<a href="menu_noticias.php" class="blue-text">Notícias</a>
							</div>
						</div>
					</div>
					<div class="col s12 m6 l4">
						<div class="card">
							<div class="card-image">
								<img src="../imgs/painel/handshake.png" class="responsive-img">
							</div>
							<div class="card-action center">
								<a href="menu_partidos.php" class="blue-text">Partidos</a>
							</div>
						</div>
					</div>
					<div class="col s12 m6 l4">
						<div class="card">
							<div class="card-image">
								<img src="../imgs/painel/painel.png" class="responsive-img">
							</div>
							<div class="card-action center">
								<a href="menu_candidatos.php" class="blue-text">Candidatos</a>
							</div>
						</div>
					</div>
					<div class="col s12 m6 l4">
						<div class="card">
							<div class="card-image">
								<img src="../imgs/painel/agenda.png" class="responsive-img">
							</div>
							<div class="card-action center">
								<a href="menu_eventos.php" class="blue-text">Eventos</a>
							</div>
						</div>
					</div>
					<div class="col s12 m6 l4">
						<div class="card">
							<div class="card-image">
								<img src="../imgs/painel/quiz.png" class="responsive-img">
							</div>
							<div class="card-action center">
								<a href="menu_quiz.php" class="blue-text">Quiz</a>
							</div>
						</div>
					</div>
				</div>
            </div>
				<!-- FIM DOS BLOCOS -->	
		</main>
		<footer class="page-footer blue">
			<div class="container">
				<div class="row">
					<div class="col l6 s12">
						<p><a href="index.php"></a><img src="../imgs/footer-logo.png"></p>
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
		<script type="text/javascript" src="../js/materialize.min.js"></script>
		<script type="text/javascript" src="../js/custom.js"></script>

        
	</body>
</html>