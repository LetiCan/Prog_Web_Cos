<?php
/* Smarty version 3.1.39, created on 2021-07-14 09:53:23
  from 'C:\Users\canta\public_html\giuHub\Prog_Web_Cos\tmpl\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60ee97f34618d0_64585706',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9a32c5a383801d8abc5beccf1b402dc1b4574ce' => 
    array (
      0 => 'C:\\Users\\canta\\public_html\\giuHub\\Prog_Web_Cos\\tmpl\\templates\\index.tpl',
      1 => 1626185769,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60ee97f34618d0_64585706 (Smarty_Internal_Template $_smarty_tpl) {
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
		
			<nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-between fixed-top" >
					
			    <ul class="navbar-nav mr-auto" id="links">
                                        <li class="nav-item">
						<a class="navbar-brand" href="#">Logo</a>
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
                                    <li class="nav-item dropleft ">
                                        
                                        <a class="nav-link dropdown-toggle"  data-toggle="dropdown"> Login </a>
                                        
                                            <div class="dropdown" id="log">
                                                
                                                <form method="POST" class="dropdown-menu" action="">
                                                        <table class="dropdown-item">
                                                            <tr>
                                                                <fieldset>
                                                                    <legend>Accedi</legend>
                                                                </fieldset>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input type="text" id="user" name="user" placeholder="Username">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input type="password" id="psw" name="psw" placeholder="Password">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input type="submit" value="Accedi" onclick="checkLogin();">
                                                                    <a href="">Password dimenticata</a>
                                                                </td>
                                                            </tr>
                                                        </table> 
                                                </form>
                                                
                                            </div>
                                            
                                    </li>
                            </ul> 
			</nav>
			 <div  class="collapse" id="inf">
			  <ul style='list-style-type:none;'>
				<li>info</li>
				<li>come prenotare un tampone?</li>
			  </ul>
			 </div>
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
	<br><br>
	<table width='100%' >
	<tr>
	<td><button id="rp" type="button" class="btn btn-primary">Richiedi Passaporto</button></td>
	<td><button id="dm" type="button" class="btn btn-primary" >Prenota Tampone</button></td>
	<td><button id="reg" type="button" class="btn btn-primary" onclick="Rgst();">Registrati</button></td>
	<td><button id="adm" type="button" class="btn btn-primary" onclick="fun1();">Admin</button></td>
	</tr>
	</table>
</div>           
<footer>   
	<div class="footer" id="informazioni" >
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-bottom ">
			<div  id="info">
				<p>@copyright by..... </p>
			<div>
		</nav>
	</div>        
</footer>

</body>
</html>
<?php }
}
