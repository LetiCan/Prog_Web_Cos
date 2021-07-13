<?php
/* Smarty version 3.1.39, created on 2021-07-06 15:54:07
  from 'C:\Users\danue\public_html\ProgWeb\tmpl\templates\Admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e4607fa84ee1_78607910',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2300da765f1cff569d20c1c14aaee48363301fa6' => 
    array (
      0 => 'C:\\Users\\danue\\public_html\\ProgWeb\\tmpl\\templates\\Admin.tpl',
      1 => 1625560468,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e4607fa84ee1_78607910 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="header">
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center fixed-top" >
		<a class="navbar-brand" href="#">Logo</a>
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
