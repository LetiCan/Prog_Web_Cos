<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> COS </title>
  <link href="stilepagine/stile1.css" rel="stylesheet" type="text/css">
  <link href="stilepagine/stile_header.css" rel="stylesheet" type="text/css">
  <link href="stilepagine/stile_footer.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="funzioniJs/funz.js"></script>
</head>

<div  class="container-fluid" id="amm">
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center " >
			<a class="navbar-brand"><img src="img/Senza titolo-1.png" width="80px" heigth="25px" ></a>
		</nav>
	<p >
		<b><h3>Lista Pazienti</h3></b>
	</p>
	<table cols=8 width='100%'>
	{foreach $info as $a }
		{if $a@first}
			<tr>
			<td><b>ID</b></td>
			<td><b>Nome</b></td>
			<td><b>Cognome</b></td>
			<td><b>Data di nascita</b></td>
			<td><b>Luogo di nascita</b></td>
			<td><b>Codice Fiscale</b></td>
			</tr>
		{/if}
		<tr>
		<td>{$a.id}</td>
		<td>{$a.nome}</td>
		<td>{$a.cognome}</td>
		<td>{$a.datan}</td>
		<td>{$a.ldn}</td>
		<td>{$a.cdf}</td>
		</tr>
	{/foreach}
	</table>

	<a href="tmpl/templates/Bacheca.tpl"><button id="bac"  class="btn btn-primary" >Bacheca</button></a>

	<form method="POST" action="index.php">
		<input type="submit" name="submit" value="Logout"></input>
	</form>
</div>




