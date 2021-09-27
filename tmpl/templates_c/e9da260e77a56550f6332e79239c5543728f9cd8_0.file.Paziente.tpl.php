<?php
/* Smarty version 3.1.39, created on 2021-09-24 10:30:03
  from 'C:\Users\danue\public_html\Prog_Web_Cos\tmpl\templates\Paziente.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614d8c8bce66b2_89567233',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9da260e77a56550f6332e79239c5543728f9cd8' => 
    array (
      0 => 'C:\\Users\\danue\\public_html\\Prog_Web_Cos\\tmpl\\templates\\Paziente.tpl',
      1 => 1632472192,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614d8c8bce66b2_89567233 (Smarty_Internal_Template $_smarty_tpl) {
?><head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> COS </title>
  <link href="stilepagine/stile1.css" rel="stylesheet" type="text/css">
  <!--<link href="stilepagine/stile_header.css" rel="stylesheet" type="text/css">
  <link href="stilepagine/stile_footer.css" rel="stylesheet" type="text/css">-->
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

<body  class="container-fluid">
<div id="header">
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center " >
		<a class="navbar-brand"><img src="img/Senza titolo-1.png" width="80px" heigth="25px" ></a>
		<a class="nav-link" href="#infopa" data-toggle="collapse" style="color: white;"> <?php echo $_smarty_tpl->tpl_vars['P']->value['username'];?>
</a>
	</nav>
</div>


<div  class="container-fluid" id="paz">

    
	<br><br>
	<table width='100%' >
	<tr>
	<td><button id="storico"  class="btn btn-primary" onclick="fun1()">Storico delle prenotazioni</button></td>
	<td><button id="pren"  class="btn btn-primary"  onclick="fun1()">Prenotazione Tampone</button></td>
	<td>
        <form method="POST" action="Pdfgreenpass.php" class="form-inline" target="_blank">
            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['id'];?>
" name="id" ></input>
            <input type="submit" name="pass" id="pass"  class="btn btn-primary" value="Green Pass"></input>
        </form>
    </td>
    <td><button id="dosi"  class="btn btn-primary" data-toggle="modal" data-target="#formLog">Caricamento dosi</button></td>
	</tr>
	</table>
 
<br>
</div>

<div class="container-fluid" id="content">

</div>
<!-- informazioini del pazinete -->
<div class="collapse" id='infopa'>
    <p><h3><b>Anagrafica</b></h3></p>
    <table>
        <tr>
            <td>
                <label>Id Utente:</label>           
            </td>
            <td>
                <?php echo $_smarty_tpl->tpl_vars['P']->value['id'];?>

            </td>
        </tr>
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
<div class="modal" id="formLog">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <form method="POST" class="modal-content" action="index.php"  onclick="controllocheckbox()" >
            <div class="container">
                <label for="dose1">1° Dose:</label>
                <input type="checkbox" name="dose1" id="dose1" value="si" >
                <label for="Si">Si</label>
                <input type="checkbox" name="dose1" id="dose1" value="no" >
                <label for="No">No</label>
                <br>
                <label for="dose2">2° Dose:</label>
                <input type="checkbox" name="dose2" id="dose2" value="si" >
                <label for="Si">Si</label>
                <input type="checkbox" name="dose2" id="dose2" value="no" >
                <label for="No">No</label>
                <br>
                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['id'];?>
"></input>
                <input class="btn btn-link" type="submit" name="submit" value="carica" ></input>
            </div>
        <form>
    </div>
</div>
<div>
    <form action="index.php" method="POST">
        <input type="hidden" name="user" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['username'];?>
"></input>
        <input type="submit"  class="btn btn-link" name="submit" value="Logout"></input>
    </form>
</div>
</body><?php }
}
