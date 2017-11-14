<?php
			@session_start();
			if(isset($_SESSION['login'])){
				
			}else{
				@$_SESSION['login'] == 0;
			}
		
			if(@$_SESSION['login'] == 1){
	    echo  "<nav>
				<div class=\"nav-wrapper blue\">
					<a href=\"../index.php\" class=\"brand-logo\"><img src='../imgs/nav-logo.png' title=\"Vote bem\" alt=\"Vote Bem\"></a>
					<a href=\"#\" data-activates=\"mobile-demo\" class=\"button-collapse\"><i class=\"material-icons\">menu</i></a>
					<ul class=\"right hide-on-med-and-down\">
						<li><a href=\"PagsControle/painel.php\">Painel de Controle</a></li>
						<li><a href=\"../galeria.html\">Galeria</a></li>
						<li><a href=\"../sobre.php\">Sobre o Movimento</a></li>
						<li><a href=\"../agenda.php\">Agenda</a></li>
						<li><a href=\"../PaginasProcessamento/logoff.php\" class=\"waves-effect waves-light btn blue lighten-2\">Sair</a></li>
					</ul>
					<ul class=\"side-nav\" id=\"mobile-demo\">
						<li><a href=\"../PagsControle/painel.php\">Painel de Controle</a></li>
						<li><a href=\"../galeria.html\">Galeria</a></li>
						<li><a href=\"../sobre.php\">Sobre o Movimento</a></li>
						<li><a href=\"../agenda.php\">Agenda</a></li>
						<li><a href=\"../login.php\">Login</a></li>
					</ul>
				</div>
			</nav>";
			}else{
				echo "<nav>
				<div class=\"nav-wrapper blue\">
					<a href=\"../index.php\" class=\"brand-logo\"><img src=\"../imgs/nav-logo.png\" title=\"Vote bem\" alt=\"Vote Bem\"></a>
					<a href=\"#\" data-activates=\"mobile-demo\" class=\"button-collapse\"><i class=\"material-icons\">menu</i></a>
					<ul class=\"right hide-on-med-and-down\">
						<li><a href=\"../galeria.html\">Galeria</a></li>
						<li><a href=\"../sobre.php\">Sobre o Movimento</a></li>
						<li><a href=\"../agenda.php\">Agenda</a></li>
						<li><a href=\"../login.php\" class=\"waves-effect waves-light btn blue lighten-2\">Login</a></li>
					</ul>
					<ul class=\"side-nav\" id=\"mobile-demo\">
						<li><a href=\"../galeria.html\">Galeria</a></li>
						<li><a href=\"../sobre.php\">Sobre o Movimento</a></li>
						<li><a href=\"../agenda.php\">Agenda</a></li>
						<li><a href=\"../login.php\">Login</a></li>
					</ul>
				</div>
			</nav>";
				
			}
			?>		