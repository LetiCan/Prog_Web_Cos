<?php
/* Smarty version 3.1.39, created on 2021-09-06 09:21:02
  from 'C:\Users\danue\public_html\Prog_Web_Cos\tmpl\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6135c15e175de7_06435195',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4611739cb719c455aec57b88a89cab36decb835' => 
    array (
      0 => 'C:\\Users\\danue\\public_html\\Prog_Web_Cos\\tmpl\\templates\\index.tpl',
      1 => 1630912855,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6135c15e175de7_06435195 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> COS </title>
  <link href="stilepagine/stile1.css" rel="stylesheet" type="text/css">
  <link href="stilepagine/stile_header.css" rel="stylesheet" type="text/css">
  <link href="stilepagine/stile_footer.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="funzioniJs/funz.js"><?php echo '</script'; ?>
>
</head>
<body class="container-fluid" id="box">
<header>  
	<div class="header" id="intestazione" >
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-between " >						
			<ul class="navbar-nav mr-auto" id="links">
				<li class="nav-item">
					<a class="navbar-brand"><img src="img/Senza titolo-1.png" width="80px" heigth="25px" ></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#chisiamo"  data-toggle="collapse">Chi siamo</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#contact"  data-toggle="collapse"> Contatti </a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"> Operazioni </a>
					<div class="dropdown-menu">
						<a class="dropdown-item" id="rp">Richiedi Passaporto</a>
						<a class="dropdown-item" id="dm">Prenota Tampone</a>
						<a class="dropdown-item" id="reg" onclick="Rgst();"> Registrati </a>
					</div>
				</li>
			</ul>
			<ul class="navbar-nav ">
				<li class="nav-item ">							
					<a class="nav-link" onclick="document.getElementById('log').style.display='block'"> Login </a>							
				</li>
			</ul> 
		</nav>
	</div>		
</header>

	<div class="container-fluid" id="home">
		<div id="demo" class="carousel slide" data-ride="carousel">

			<!-- Indicators -->
			<ul class="carousel-indicators">
				<li data-target="#demo" data-slide-to="0" class="active"></li>
				<li data-target="#demo" data-slide-to="1"></li>
				<li data-target="#demo" data-slide-to="2"></li>
			</ul>

			<!-- The slideshow -->
			<div class="carousel-inner">
				<div class="carousel-item active">
				<img class="img-fluid" src="img\Sfondo1_0.jpg" alt="pippo" width="100%" height="250px">
				</div>
				<div class="carousel-item">
				<img class="img-fluid" src="img\vaccino1_0.jpg" alt="topolino" width="100%" height="250px">
				</div>
				<div class="carousel-item">
				<img class="img-fluid" src="img\vaccino2_0.jpg" alt="paperino" width="100%" height="250px">
				</div>
			</div>

			<!-- Left and right controls -->
			<a class="carousel-control-prev" href="#demo" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			</a>
			<a class="carousel-control-next" href="#demo" data-slide="next">
				<span class="carousel-control-next-icon"></span>
			</a>
		</div>
		<div class="collapse" id="chisiamo">
			<h2><p align= center><br><br>Centro Operativo Sanitario</p></h2>
			<p align= center><br><br>
			COS è il Gruppo leader in Italia nella medicina di laboratorio per i pazienti,
			le strutture sanitarie e le imprese. Fondato nel 2013 dal Prof. Giggione  e dal Dr. Capossela, 
			rappresenta oggi il più grande provider di analisi cliniche di laboratorio nel campo della chimica clinica,
			dell’ematologia, dell’immunochimica, della microbiologia, della biologia molecolare, della citologia e 
			della patologia. Nel 2018, con l’acquisizione del Laboratorio Giustino, il Gruppo COS è entrato anche
			nel settore delle analisi ambientali ed alimentari. Grazie al proprio network di laboratori, all’eccellenza delle
			competenze professionali e a tecnologie di ultima generazione, oggi Lifebrain rappresenta il Gruppo 
			di laboratori a più alto tasso di crescita in Europa.
			</p>
		</div>
		<div class="modal" id="log">						
			<form method="POST" class="modal-content" action="index.php">
				<div class="container">
					<label for="username"><b>Username</b></label><br>
					<input type="text" placeholder="Username" id="user" name="user" value="" ><br>

					<label for="password"><b>Password</b></label><br>
					<input type="password" placeholder="Password"  id="psw" name="psw" value=""><br>

					<input type="submit" name="lg" value="Accedi" onclick="checkLogin();"></input>
				</div>		
			</form>
		</div>  		
		<br><br>
		 <div  class="collapse" id="contact">
				<h2><p align= center><br>Centro Operativo Sanitario</p></h2>
				<p align= center>
					Sede Amministrativa c/o Tecnopolo Tiburtino, Via Giacomo Peroni, 452 – 00131 Roma
				<hr width=25% size=”1″ color=#888 align=”center“ />
				
				
				<h3><p align= center>Dipartimento Marketing e Ufficio Stampa</p></h3>
					<p align= center>marketing@cos.it</p>
				
				<hr width=25% size=”1″ color=#888 align=”center“ />
				
				<h3><p align= center>Segnalazioni Pazienti	</p></h3>
				<p align= center> customercare@cos.it</p>
				
				<hr width=25% size=”1″ color=#888 align=”center“ />

				<h3><p align= center>Sales (aziende e strutture sanitarie)	</p></h3>
				<p align= center>Indirizzo dedicato al Nord Italia: Sales.nord@cos.it </p>
				
				<p align= center>Indirizzo dedicato al Centro Italia: Sales.centro@cos.it	</p>
				
				<p align= center>Indirizzo dedicato al Sud Italia: Sales.sud@cos.it	</p>
			</div>
	</div>   
</body>
	<footer>   
		<div  id="info">
			<p>@copyright by..... </p>
		<div>       
	</footer>
	<?php echo '<script'; ?>
>
		// Get the modal
		var modal = document.getElementById('log');

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}
	<?php echo '</script'; ?>
>

</html>
 
<?php }
}
