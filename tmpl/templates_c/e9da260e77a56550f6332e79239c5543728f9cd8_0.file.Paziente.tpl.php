<?php
/* Smarty version 3.1.39, created on 2021-09-07 11:22:58
  from 'C:\Users\danue\public_html\Prog_Web_Cos\tmpl\templates\Paziente.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61372f72c2c756_37893035',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9da260e77a56550f6332e79239c5543728f9cd8' => 
    array (
      0 => 'C:\\Users\\danue\\public_html\\Prog_Web_Cos\\tmpl\\templates\\Paziente.tpl',
      1 => 1631006557,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61372f72c2c756_37893035 (Smarty_Internal_Template $_smarty_tpl) {
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
	<td><button id="pren"  class="btn btn-primary"  href="#pre" data-toggle="collapse"  >Prenotazione Tampone</button></td>
	<td><button id="pass"  class="btn btn-primary" onclick="">Richiesta Passaporto</button></td>
    <td><button id="dosi"  class="btn btn-primary" onclick="">Caricamento dosi</button></td>
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
<div class="collapse" id="pre">		
    <h1>Prenotazione Online</h1>
    <br>
	<h2><p align= center>Prenotazione tampone covid-19</p></h2>
	<i><p align= center>Indicazioni generali</p></i>
	<p align= center>Ti ricordiamo che per il tampone molecolare la prescrizione medica è necessaria in Lombardia e Campania. Per il tampone antigenico rapido la prescrizione
                     medica è necessaria in Sardegna e Lombardia.
                     É possibile prenotare il test salivare nei centri
                     COS del Lazio scegliendo il servizio “Tampone molecolare
                     e Salivare”
    </p>
    <br>	
    <form method="POST" action="index.php" id="formPre">
        <div class="container" bgcolor="#B0E0E6">
            <label for="userid">Id Utente: <?php echo $_smarty_tpl->tpl_vars['P']->value['id'];?>
 </label>           
            <br>
            <label for="prov"> Povincia: </label>
            <select name="prov" id="prov" onchange="aggiornaOpzioni()">
                <option value="Pescara"> Pescara </option>
                <option value="Aquila"> Aquila </option>
                <option value="Chieti"> Chieti </option>
                <option value="Teramo"> Teramo </option>
            </select>
            <br>
            <label for="lab"> Laboratori: </label>
            <select name="lab" id="lab">

            </select>
            <br>
            <label for="tipotmp" >Tipo Tampone: </label>
            <select name="tamp" id="tamp">
                <option value="testrapido">Tampone Rapido</option>
                <option value="sierologico">Tampone Sierologico</option>
            </select>
            <br>
            <label for="datapre" >Data prenotazione:</label>
            <input type="date" name="datapre"></input>
            <br>
            <input type="submit" name="invia" value="Invia"></input>
        </div>   
    </form>
</div>
<form method="POST" action="index.php">
    <input class="btn btn-primary" type="submit" name="lgo" value="Logout" ></input>
<form>
</body><?php }
}
