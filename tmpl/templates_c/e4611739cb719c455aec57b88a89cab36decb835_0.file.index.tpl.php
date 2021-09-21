<?php
/* Smarty version 3.1.39, created on 2021-09-21 09:18:52
  from 'C:\Users\danue\public_html\Prog_Web_Cos\tmpl\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6149875c6508e6_06897119',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4611739cb719c455aec57b88a89cab36decb835' => 
    array (
      0 => 'C:\\Users\\danue\\public_html\\Prog_Web_Cos\\tmpl\\templates\\index.tpl',
      1 => 1632208573,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6149875c6508e6_06897119 (Smarty_Internal_Template $_smarty_tpl) {
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
<body class="container-fluid" id="boxs"> 
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
						<a class="dropdown-item" name="rg" id="rg" onclick="Rgst();" >Registrati</a>
					</div>
				</li>
			</ul>
			<ul class="navbar-nav ">
				<li class="nav-item ">							
					<a class="nav-link" data-toggle="modal" data-target="#log"> Login </a>							
				</li>
			</ul> 
		</nav>
	</div>		


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

			<!-- Left and "right" controls -->
			<a class="carousel-control-prev" href="#demo" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			</a>
			<a class="carousel-control-next" href="#demo" data-slide="next">
				<span class="carousel-control-next-icon"></span>
			</a>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-9">
				<p ><h2><b>Centro Operativo Sanitario</b></h2></p>
				<p >Centro per richieste di tamponi e Green Pass</p>
			</div>
			<div class="col-sm-3">
					<p id="orari">
						<h3>Orari</h3>
						<h5><i>Tamponi</h5></i>
						Lunedi- Sabato 7:30-11:00<br>
						<h5><i>Ritiro Passaporti</h5></i>
						Lunedi-Venerdi 11:00-13:00, 17:00-18:00<br>
						Sabato: 11:00-13:00		
					</p>
			</div>
		</div>
		<div class="container-fluid" id="avvisi" >
			<table border cols=2 width='100%'>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['avv']->value, 'a');
$_smarty_tpl->tpl_vars['a']->index = -1;
$_smarty_tpl->tpl_vars['a']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->do_else = false;
$_smarty_tpl->tpl_vars['a']->index++;
$_smarty_tpl->tpl_vars['a']->first = !$_smarty_tpl->tpl_vars['a']->index;
$__foreach_a_0_saved = $_smarty_tpl->tpl_vars['a'];
?>
				<?php if ($_smarty_tpl->tpl_vars['a']->first) {?>
				<tr>
					<td> DATA </td>
					<td> ANNUNCIO</td>
				</tr>
				<?php }?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['a']->value['data'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['a']->value['ann'];?>
</td>
				</tr>
			<?php
$_smarty_tpl->tpl_vars['a'] = $__foreach_a_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</table>	
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
			<div class="modal-dialog modal-dialog-centered modal-sm">	
				<form method="POST"  class="modal-content" action="index.php">
					<div class="container">
						<label for="username"><b>Username</b></label><br>
						<input type="text" placeholder="Username" id="user" name="user" value="" ><br>

						<label for="password"><b>Password</b></label><br>
						<input type="password" placeholder="Password"  id="psw" name="psw" value="">
						<br>

						<input type="submit" name="submit" value="Accedi" onclick="checkLogin();"></input>
					</div>
				</form>		
			</div>
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
</html>
 
<?php }
}
