<?php
		@$id   = $_GET['id'];
		
		include "../PaginasProcessamento/conexao.php";
		$sql = "SELECT * FROM tb_noticias WHERE id_noticia= $id";	
		$votebem = $banco -> prepare($sql);
		$votebem -> execute();
		
        foreach($votebem as $noticias){
		  $imgbdold = $noticias['imagem'];
		}
/**

Ele nao puxa o 'name' nem 'size' etc...
assim ele manda pro bd porem como nao tem o $formato ficao somente o nome temporario

*/
        if(isset($_POST['enviar'])){
            $titulo       = $_POST["titulo"];
            $resumo       = $_POST["resumo"];
            $noticia      = $_POST["noticia"];
            $Arq          = $_FILES['imgNova'];
            $nomeArq      = $Arq['name'];
            $tamanho      = $Arq['size'];
            $tmp          = $Arq['tmp_name'];
            $formato      = pathinfo($nomeArq, PATHINFO_EXTENSION);
            $nomeBdArq    = uniqid().".".$formato;
            $upload       = move_uploaded_file($tmp, '../imgs/noticias/'.$nomeBdArq );

            unlink("../imgs/noticias/$imgbdold");

            include "conexao.php";
            $sql = "UPDATE tb_noticias SET titulo_noticia=?, imagem=?, texto=?, resumo=? WHERE id_noticia='$id'";	
            $votebem = $banco -> prepare($sql);
            $votebem -> execute(array($titulo,$nomeBdArq,$noticia,$resumo));
            $votebem = null;
            header("Location: menu_noticias.php?cadastro=ok");

        }
	?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Vote Bem - Editar Notícia</title>
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
						<a href="menu_noticias.php" class="breadcrumb">Menu de Notícias</a>
						<a href="editar_noticia.php" class="breadcrumb">Editar Notícia</a>
					</div>
				</div>
			</nav>				
			<div class="container">
				<div class="row">
					<div class="col s12 m12 l12">
					  <h3 class="center">Editar Notícias</h3>
					</div>
				</div>
				<div class="row">
                    <form method="GET" action="" class="col s12">
                        <div class="row">
							<select name="id" required id="seleciona" required>
                                    <option value="" disabled selected>Selecione a notícia que deseja editar</option>
                                   <?php 
									include "../PaginasProcessamento/conexao.php";
									$sql     = "SELECT * FROM tb_noticias";
									$votebem = $banco -> prepare($sql);
									$votebem -> execute();
								
									foreach($votebem as $id){ ?>
									<option value="<?php echo $id['id_noticia'];?>"><?php echo $id['titulo_noticia'];?></option>
									<?php														
									}
									?>
                              </select>
						</div>
						<div class="row">
							<div class="col s12 center">
								<button class="btn waves-effect waves-light" type="submit" name="enviar" >Enviar 
									<i class="material-icons right">send</i>
								</button>
							</div>
						</div>
					</form>
				</div>
				<div class='row'>
					<form method='POST' action='teste.php' class='col s12'>
				        <div class="row">
                        <div class="input-field col s6">
                          <input id="titulo" name="titulo" value='<?php if(isset($noticias)){echo $noticias['titulo_noticia'];}?>' type="text" class="validate" data-length="30">
                          <label for="titulo">Titulo da notícia</label>
                        </div>
                        <div class="input-field col s6">
                          <input id="resumo" name="resumo" type="text" value='<?php if(isset($noticias)){echo $noticias['resumo'];}?>'  class="validate" data-length="50">
                          <label for="resumo">Resumo da notícia</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="file-field input-field col s12">
                          <div class="btn">
                            <span>Imagem</span>
                            <input type="file" name="imgNova">
                          </div>
                          <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                          </div>
                        </div>
                      </div>
                        <div class="row">
                            <div class="s12 m6">
                                <div class="input-field col s12">
                                  <textarea id="noticia" name="noticia" class="materialize-textarea"><?php if(isset($noticias)){echo $noticias['texto'];}?></textarea>
                                  <label for="noticia">Notícia</label>
                                </div>
                            </div>
                        </div>
                          <button class="btn waves-effect waves-light right" type="submit" name="enviar">Enviar
                            <i class="material-icons right">send</i>
                          </button>
					</form>
				</div>
			</div>
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
					2017 Copyright - Todos os direitos reservados
				</div>
			</div>
		</footer>
		<!-- mascara-->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script type="text/javascript" src="../js/jQueryMaskPlugin/dist/jquery.mask.min.js"></script>
		<!-- outros -->
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="../js/materialize.min.js"></script>
		<script type="text/javascript" src="../js/custom.js"></script>
	</body>
</html>
<di