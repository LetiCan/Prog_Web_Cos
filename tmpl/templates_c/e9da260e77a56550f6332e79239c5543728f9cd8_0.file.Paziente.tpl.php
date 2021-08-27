<?php
/* Smarty version 3.1.39, created on 2021-08-27 18:08:19
  from 'C:\Users\danue\public_html\Prog_Web_Cos\tmpl\templates\Paziente.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61290df3f16562_70947201',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9da260e77a56550f6332e79239c5543728f9cd8' => 
    array (
      0 => 'C:\\Users\\danue\\public_html\\Prog_Web_Cos\\tmpl\\templates\\Paziente.tpl',
      1 => 1630080288,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61290df3f16562_70947201 (Smarty_Internal_Template $_smarty_tpl) {
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
		<a class="nav-link" href="#infopa" data-toggle="collapse" style="color: white;"> <?php echo $_smarty_tpl->tpl_vars['P']->value['username'];?>
</a>
	</nav>
</div>

<div  class="container-fluid" id="paz">

    
	<br><br>
	<table width='100%' >
	<tr>
	<td><button id="storico" type="button" class="btn btn-primary">Storico delle prenotazioni</button></td>
	<td><button id="richiestaP" type="button" class="btn btn-primary" >Richiesta Passaporto</button></td>
	<td><button id="PrenT" type="button" class="btn btn-primary" onclick="">Prenotazione Tampone</button></td>
    <td><button id="caricaD" type="button" class="btn btn-primary" onclick="">Caricamento dosi</button></td>
	</tr>
	</table>
</div>

<!-- informazioini del pazinete -->
<div class="collapse" id='infopa'>
    <table>
        <tr>
            <td>
                <label>Nome:</label>  
            </td>
            <td>
                <?php echo $_smarty_tpl->tpl_vars['P']->value['nome'];?>

            </td>                
        </tr>
        <tr>
            <td>
                <label>Cognome:</label>  
            </td>
            <td>
                <?php echo $_smarty_tpl->tpl_vars['P']->value['cognome'];?>

            </td>  
        </tr>
         <tr>
            <td>
                <label>Codice fiscale:</label>  
            </td>
            <td>
                <?php echo $_smarty_tpl->tpl_vars['P']->value['cod_fisc'];?>

            </td>  
        </tr> 
    </table>
</div>

<br>
<a href="index.php">home</a>
</body><?php }
}
