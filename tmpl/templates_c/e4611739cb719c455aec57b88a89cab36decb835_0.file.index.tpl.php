<?php
/* Smarty version 3.1.39, created on 2021-08-18 15:32:41
  from 'C:\Users\danue\public_html\Prog_Web_Cos\tmpl\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611d0bf9633df2_94852649',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4611739cb719c455aec57b88a89cab36decb835' => 
    array (
      0 => 'C:\\Users\\danue\\public_html\\Prog_Web_Cos\\tmpl\\templates\\index.tpl',
      1 => 1629217601,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611d0bf9633df2_94852649 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> COS </title>
  <link href="./stilepagine/stile1.css" rel="stylesheet" type="text/css">
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
<header>  
	<div class="header" id="intestazione" >
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-between fixed-top" >						
			<ul class="navbar-nav mr-auto" id="links">
				<li class="nav-item">
					<a class="navbar-brand"><img src="img/Senza titolo-1.png" width="80px" heigth="25px" ></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Chi siamo</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#inf" data-toggle="collapse"> Info Prenotazioni</a>
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
<body class="container-fluid" id="box">
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

		<div class="modal" id="log">						
			<form method="POST" class="modal-content" action="index.php">
				<div class="container">
					<label for="username"><b>Username</b></label>
					<input type="text" placeholder="Username" id="user" name="user" >

					<label for="password"><b>Password</b></label>
					<input type="password" placeholder="Password"  id="psw" name="psw" >

					<input type="submit" onclick="checkLogin();">Accedi</input>
				</div>		
			</form>
		</div>

		<div  class="collapse" id="inf">
			<ul style='list-style-type:none;'>
				<li>info</li>
				<li>come prenotare un tampone?</li>
			</ul>
		</div>  
		<br><br>
		<div>
			<table width='100%' >
				<tr>
					<td><button id="rp" type="button" class="btn btn-primary">Richiedi Passaporto</button></td>
					<td><button id="dm" type="button" class="btn btn-primary" >Prenota Tampone</button></td>
					<td><button id="reg" type="button" class="btn btn-primary" onclick="Rgst();">Registrati</button></td>
				</tr>
			</table>
		</div>
	</div>   
</body>
	<footer>   
		<div class="footer" id="informazioni" >
			<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-bottom ">
				<div  id="info">
					<p>@copyright by..... </p>
				<div>
			</nav>
		</div>        
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
