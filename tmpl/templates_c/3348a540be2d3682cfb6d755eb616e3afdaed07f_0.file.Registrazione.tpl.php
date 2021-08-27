<?php
/* Smarty version 3.1.39, created on 2021-08-25 12:58:16
  from 'C:\Users\danue\public_html\Prog_Web_Cos\tmpl\templates\Registrazione.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61262248a7d326_15693347',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3348a540be2d3682cfb6d755eb616e3afdaed07f' => 
    array (
      0 => 'C:\\Users\\danue\\public_html\\Prog_Web_Cos\\tmpl\\templates\\Registrazione.tpl',
      1 => 1629884491,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61262248a7d326_15693347 (Smarty_Internal_Template $_smarty_tpl) {
?><div  class="container" id="rg">
	<div id="header">
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center fixed-top" >
			<a class="navbar-brand"><img src="img/Senza titolo-1.png" width="80px" heigth="25px" ></a>
		</nav>
	</div>
<br><br>
<hr>
<br><br>

    <br><br>
    <fieldset>
     <legend>
        Inserisci i tuoi dati
    </legend>
    </fieldset>
<form method="POST" action="index.php">
	<div class="form-group">
 	  <label for="nome">Nome:</label>
	  <input type="text" name="nome" id="nome" placeholder="Nome" >

	  <label for="cognome">cognome:</label>
	  <input type="text" name="cognome" id="cognome" placeholder="cognome" >

	  <label for="datanascita">Data di Nascita:</label>
	  <input type="date" name="datanascita" id="dtn" >

	  <br>
	  <label for="ldn">Luogo di Nascita:</label>
	  <input type="text" name="ldn" id="ldn" placeholder="Luogo di Nascita">

	  <label for="cdf">Codice fiscale:</label>
	  <input type="text" name="cdf" id="cdf" placeholder="codice fiscale" maxlength="16">

	  <label for="sesso">Sesso:</label>
	  <input type="checkbox" name="sesso" id="sesso" value="M" onclick="controllocheckbox()">
	  <label for="M">M</label>
	  <input type="checkbox" name="sesso" id="sesso" value="F" onclick="controllocheckbox()" >
	  <label for="F">F</label>
	  <br>
	  <label for="uesr">Username:</label>
	  <input type="text" id="user" name="username" placeholder="username">

	  <label for="psw">Password:</label>
	  <input type="password" id="pwd" name="pwd" placeholder="password" >

	  <p id="validazione">
			<input type="submit" value="Registrati" name="rgs" onclick="checkRegistrazione()">
			<input type="reset" value="Ripristina" name="rpr" onclick="">
	  </p>
	</div>		
<form>
<a href="index.php">home</a>
<hr>
</div>
<?php }
}
