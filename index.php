<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Vote Bem - Home</title>
		<link rel="icon" href="imgs/favicon.ico">
		<meta charset="UTF-8">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
		<link rel="stylesheet" href="css/estilo.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	</head>
	<body>
		<main>
			<?php include "PaginasProcessamento/nav.php"; ?>
			<div class="container">
				<div class="row">
					<div class="col s12 m6 l4">						
						<!--inicio do card QUIZ-->
						<div class="quiz">
                            <div class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator" src="imgs/cards/Quiz.jpg">
                                </div>
                                <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4">Quiz<i class="material-icons right">more_vert</i></span>
                                    <p><a href="quiz/quiz_perguntas.php">Clique aqui para acessar</a></p>
                                </div>
                                <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4">Quiz<i class="material-icons right">close</i></span>
                                    <p>Venha testar seu conhecimento sobre politíca e ver se voce realmente sabe sobre o assunto.</p>
                                </div> 
                            </div>
						</div>
					</div>
					<!--inicio do card Projetos-->
					<div class="projetos">
                        <div class="col s12 m6 l4">
                            <div class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator" src="imgs/cards/projetos.jpg">
                                </div>
                                <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4">Projetos de Lei<i class="material-icons right">more_vert</i></span>
                                    <p><a href="projetos_lei/projetos-de-lei.php">Clique aqui para acessar</a></p>
                                </div>
                                <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4">Projetos de Lei<i class="material-icons right">close</i></span>
                                    <p>Voce sabe como funciona um projeto de lei? E como é feito? Descubra isso agora! </p>
                                </div>
                            </div>
                        </div>
					</div>
					<div class="col s12 m6 l4">
						<!--inicio do card Saiba mais-->
						<div class="saiba">
						<div class="card">
							<div class="card-image waves-effect waves-block waves-light">
								<img class="activator" src="imgs/cards/saibamais.jpg">
							</div>
							<div class="card-content">
								<span class="card-title activator grey-text text-darken-4">Saiba +<i class="material-icons right">more_vert</i></span>
								<p><a href="saibamais/saiba.php">Clique aqui para acessar</a></p>
							</div>
							<div class="card-reveal">
								<span class="card-title grey-text text-darken-4">Saiba +<i class="material-icons right">close</i></span>
								<p>Aqui voce pode encontar mais sobre assustos sobre politíca, partidos, candidatos e sobre eventos e muito mais.</p>
							</div>
						</div>
						</div>
					</div>
					
					<div class="col s12 m6 l4">
						<!--inicio do card Noticias-->
						<div class="noticias">
						<div class="card">
							<div class="card-image waves-effect waves-block waves-light">
								<img class="activator" src="imgs/cards/Jornal.jpg">
							</div>
							<div class="card-content">
								<span class="card-title activator grey-text text-darken-4">Notícias<i class="material-icons right">more_vert</i></span>
								<p><a href="noticias.php">Clique aqui para acessar</a></p>
							</div>
							<div class="card-reveal">
								<span class="card-title grey-text text-darken-4">Notícias<i class="material-icons right">close</i></span>
								<p>Fique por dentro do que acontece com o mundo politico e sobre todas as ações realizadas nesse meio. </p>
							</div>
						</div>
						</div>
					</div>
					<div class="col s12 m6 l4">
						<!--inicio do card Forum-->
						<div class="forum">
						<div class="card">
							<div class="card-image waves-effect waves-block waves-light">
								<img class="activator" src="imgs/cards/forum.jpg">
							</div>
							<div class="card-content">
								<span class="card-title activator grey-text text-darken-4">Fórum<i class="material-icons right">more_vert</i></span>
								<p><a href="forum.php">Clique aqui para acessar</a></p>
							</div>
							<div class="card-reveal">
								<span class="card-title grey-text text-darken-4">Fórum<i class="material-icons right">close</i></span>
								<p>Debata sobre determinados assuntos e saiba mais sobre a opinião dos outros para determinados assuntos.</p>
							</div>
						</div>
						</div>
					</div>
					<div class="col s12 m6 l4">
						<!--inicio do card-->
						<div class="candidatos">
							<div class="card">
								<div class="card-image waves-effect waves-block waves-light">
									<img class="activator" src="imgs/cards/candidatos.jpg">
								</div>
								<div class="card-content">
									<span class="card-title activator grey-text text-darken-4">Candidatos e Partidos<i class="material-icons right">more_vert</i></span>
									<p><a href="index_cand_part.php">Clique aqui para acessar</a></p>
								</div>
								<div class="card-reveal">
									<span class="card-title grey-text text-darken-4">Candidatos e Partidos<i class="material-icons right">close</i></span>
									<p>Saiba mais sobre como os partidos e candidatos funcionam e como eles podem influenciar no seu voto.</p>
								</div>
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