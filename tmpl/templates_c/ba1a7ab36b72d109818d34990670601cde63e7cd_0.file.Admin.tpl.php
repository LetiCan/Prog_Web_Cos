<?php
/* Smarty version 3.1.39, created on 2021-08-13 11:55:39
  from 'C:\Users\danue\public_html\Prog_Web_Cos\tmpl\templates\Admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6116419bbb6c12_59657934',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba1a7ab36b72d109818d34990670601cde63e7cd' => 
    array (
      0 => 'C:\\Users\\danue\\public_html\\Prog_Web_Cos\\tmpl\\templates\\Admin.tpl',
      1 => 1628848526,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6116419bbb6c12_59657934 (Smarty_Internal_Template $_smarty_tpl) {
?><head>
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
</head>

<body  class="container-fluid">
<div id="header">
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center fixed-top" >
		<a class="navbar-brand"><img src="img/Senza titolo-1.png" width="80px" heigth="25px" ></a>
		<a class="nav-link" href="#"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</a>
	</nav>
</div>

<div  class="container-fluid" id="amm">

    
	<br><br>
	<table width='100%' >
	<tr>
	<td><button id="storico" type="button" class="btn btn-primary">Storico dei Pazienti</button></td>
	<td><button id="approva" type="button" class="btn btn-primary" >Approvazione Passaporti</button></td>
	<td><button id="comunica" type="button" class="btn btn-primary" onclick="">Comunicazini</button></td>
	</tr>
	</table>
 

<br>
<a href="index.php">home</a>
</div>
</body><?php }
}
