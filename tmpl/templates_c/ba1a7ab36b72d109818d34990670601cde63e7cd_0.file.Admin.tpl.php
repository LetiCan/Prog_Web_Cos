<?php
/* Smarty version 3.1.39, created on 2021-11-04 11:26:11
  from 'C:\Users\danue\public_html\Prog_Web_Cos\tmpl\templates\Admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6183b543af3c29_08808482',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba1a7ab36b72d109818d34990670601cde63e7cd' => 
    array (
      0 => 'C:\\Users\\danue\\public_html\\Prog_Web_Cos\\tmpl\\templates\\Admin.tpl',
      1 => 1636021544,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6183b543af3c29_08808482 (Smarty_Internal_Template $_smarty_tpl) {
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
  <?php echo '<script'; ?>
 src="funzioniJs/funz.js"><?php echo '</script'; ?>
>
</head>

<div  class="container-fluid" id="amm">
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center " >
			<a class="navbar-brand"><img src="img/Senza titolo-1.png" width="80px" heigth="25px" ></a>
		</nav>
	<p >
		<b><h3>Lista Pazienti</h3></b>
	</p>
	<table cols=8 width='100%'>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['info']->value, 'a');
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
			<td><b>ID</b></td>
			<td><b>Nome</b></td>
			<td><b>Cognome</b></td>
			<td><b>Data di nascita</b></td>
			<td><b>Luogo di nascita</b></td>
			<td><b>Codice Fiscale</b></td>
			</tr>
		<?php }?>
		<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['a']->value['id'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['a']->value['nome'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['a']->value['cognome'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['a']->value['datan'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['a']->value['ldn'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['a']->value['cdf'];?>
</td>
		</tr>
	<?php
$_smarty_tpl->tpl_vars['a'] = $__foreach_a_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</table>

	<a href="tmpl/templates/Bacheca.tpl"><button id="bac"  class="btn btn-primary" >Bacheca</button></a>

	<form method="POST" action="index.php">
		<input type="submit" name="submit" value="Logout"></input>
	</form>
</div>




<?php }
}
