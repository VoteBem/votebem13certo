<?php
		@$id   = $_GET['id'];
		
		include "../PaginasProcessamento/conexao.php";
		$sql = "SELECT * FROM tb_eventos WHERE id_evento= $id";	
		$votebem = $banco -> prepare($sql);
		$votebem -> execute();
		
		foreach($votebem as $eventos){
		
		if(isset($_POST['enviar'])){
			$nome      = $_POST['nome'];
			$desc      = $_POST['desc'];
			$ingresso  = $_POST['ingresso'];
			$data      = $_POST['data'];
			$horario   = $_POST['horario'];
			$local     = $_POST['local'];
			$nomeBdArq = "null";

			
			include "conexao.php";
			$sql = "UPDATE tb_eventos SET nome=?, imagem=?, descricao=?, ingresso=?, data=?,horario=?,local=? WHERE id_evento='$id'";	
			$votebem = $banco -> prepare($sql);
			$votebem -> execute(array($nome,$nomeBdArq,$desc,$ingresso,$data,$horario,$local));
			header("Location:menu_eventos.php?cadastro=ok");
			}
		}
	?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Vote Bem - Editar Evento</title>
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
						<a href="menu_eventos.php" class="breadcrumb">Menu de Eventos</a>
						<a href="editar_eventos.php" class="breadcrumb">Editar Eventos</a>
					</div>
				</div>
			</nav>			
			<div class="container">
				<div class="row">
					<div class="col s12 m12 l12">
					  <h3 class="center">Editar Eventos</h3>
					</div>
				</div>
				<div class="row">
                    <form method="GET" action="" class="col s12">
                        <div class="row">
							<select name="id" required id="seleciona" required>
                                    <option value="" disabled selected>Selecione o evento que deseja editar</option>
                                   <?php 
									include "../PaginasProcessamento/conexao.php";
									$sql     = "SELECT * FROM tb_eventos";
									$votebem = $banco -> prepare($sql);
									$votebem -> execute();
								
									foreach($votebem as $id){ ?>
									<option value="<?php echo $id['id_evento'];?>"><?php echo $id['nome'];?></option>
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
					<form method="POST" action="../PaginasProcessamento/RecebeEvento.php" class="col s12" enctype="multipart/form-data">
                        <div class="row">
                            <div class="input-field col s12 m6">
                                <input id="nome" autofocus  name="nome" value='<?php if(isset($eventos)){echo $eventos['nome'];}?>'type="text" class="validate">
                                <label for="first_name">Nome</label>
                            </div>
							<div class="file-field input-field col s12 m6">
							  <div class="btn">
								<span>Imagem</span>
								<input type="file" name="img">
							  </div>
							  <div class="file-path-wrapper">
								<input class="file-path validate" type="text">
							  </div>
							</div>
                        </div>
						<div class="row">
							<div class="col input-field col s12 m6">
								<input id="numero"  value='<?php if(isset($eventos)){echo $eventos['descricao'];}?>'name="desc" type="text" class="validate">
								<label for="first_name">Descriçao</label>
							 </div>
							 <div class="input-field col s12 m6">
								<input id="ano_fundacao"  type="number" name="ingresso" value='<?php if(isset($eventos)){echo $eventos['ingresso'];}?>'class="validate" required>
							<label for="ano_fundacao">Ingresso</label>
						</div>
					    </div>
                      </div>
					  <div class="row">
						<div class="input-field col s12 m6">
							<input id="ano_fundacao"  type="text" name="data" class="validate" value='<?php if(isset($eventos)){echo $eventos['data'];}?>'data-mask="00/00/0000" max-length=8 required>
							<label for="ano_fundacao">Data</label>
						</div>
						<div class="input-field col s12 m6">
							<input id="ano_fundacao"  type="text" name="horario" value='<?php if(isset($eventos)){echo $eventos['horario'];}?>'class="validate" required>
							<label for="ano_fundacao">Horário</label>
						</div>
					   </div>
					   <div class="row">
						<div class="input-field col s12">
							<input id="ideais"  type="text" name="local" value='<?php if(isset($eventos)){echo $eventos['local'];}?>'class="materialize-textarea validate">
							<label for="ideais">Local</label>
						</div>
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