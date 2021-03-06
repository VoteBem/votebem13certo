﻿<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="css/custom.css" media="screen,projection" />
	<link rel="stylesheet" href="css/estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Vote Bem - Candidatos e Partidos</title>
	<link rel="icon" href="../imgs/favicon.ico">
</head>
<script>
    $(document).ready(function() {
        $('.materialboxed').materialbox();
    });
</script>
<style>
    #content {
        height: 450px;
        width: 1000px;
        display: block;
        flex-direction: row;
        flex-flow: row wrap;
        justify-content: space-around;
        margin: 0 auto;
        margin-top: 50px;
        margin-bottom: 30px;
        text-align: center;
    }
    
    .item {
        height: 100px;
        width: 150px;
    }
</style>

<body>
    <main>
        <?php include "PaginasProcessamento/nav.php"; ?>
			<nav class="hide-on-small-only">
				<div class="nav-wrapper blue espacamento-lateral">
					<div class="col s12">
						<a href="index.php" class="breadcrumb">Home</a>
						<a href="index_cand_part.html" class="breadcrumb">Candidatos e Partidos</a>
					</div>
				</div>
			</nav>		
        <div class="center">
            <h1>Candidatos e Partidos</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col s12 m6">

                    <!--inicio do card QUIZ-->
                    <div class="quiz">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="imgs/candidatos/Terno.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Candidatos<i class="material-icons right">more_vert</i></span>
                                <p><a href="candidatos.php">Clique aqui para acessar</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Candidatos<i class="material-icons right">close</i></span>
                                <p>Saiba mais sobre o que os candidatos estao fazendo para a sociedade e conheça mais sobre eles.</p>
                            </div>
                        </div>
                    </div>
                </div>


                <!--inicio do card Projetos-->
                <div class="projetos">
                    <div class="col s12 m6">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="imgs/candidatos/Partidos.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Partidos<i class="material-icons right">more_vert</i></span>
                                <p><a href="partidos.php">Clique aqui para acessar</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Partidos<i class="material-icons right">close</i></span>
                                <p>Saiba mais sobre o que os partidos estao fazendo para a sociedade e conheça mais sobre eles.</p>
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