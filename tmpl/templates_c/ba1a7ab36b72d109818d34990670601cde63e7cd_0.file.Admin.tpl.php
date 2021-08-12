<?php
/* Smarty version 3.1.39, created on 2021-08-12 13:26:13
  from 'C:\Users\danue\public_html\Prog_Web_Cos\tmpl\templates\Admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61150555e81e32_81787172',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba1a7ab36b72d109818d34990670601cde63e7cd' => 
    array (
      0 => 'C:\\Users\\danue\\public_html\\Prog_Web_Cos\\tmpl\\templates\\Admin.tpl',
      1 => 1626445662,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61150555e81e32_81787172 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="header">
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
<?php }
}
