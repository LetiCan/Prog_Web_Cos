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
</head>

<div  class="container-fluid" id="amm">
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center " >
			<a class="navbar-brand"><img src="img/Senza titolo-1.png" width="80px" heigth="25px" ></a>
		</nav>

		<form class="form-inline">
			<input type="text" placeholder="Cerca Paziente" >
			<button id="comunica" type="submit" class="btn btn-success mb-2" >cerca</button>
		</form>


	<table cols=8 width='100%'>
	{foreach $info as $a }
		{if $a@first}
			<tr>
			<td>ID</td>
			<td>Nome</td>
			<td>Cognome</td>
			<td>Data di nascita</td>
			<td>Luogo di nascita</td>
			<td>Codice Fiscale</td>
			<td>Tamponi effettuati</td>
			<td>Approvazione Passaporto</td>
			</tr>
		{/if}
		<tr>
		<td>{$a.id}</td>
		<td>{$a.nome}</td>
		<td>{$a.cognome}</td>
		<td>{$a.datan}</td>
		<td>{$a.ldn}</td>
		<td>{$a.cdf}</td>
		<td>{$a.tf}</td>
		<td><button id="approva" type="button" class="btn btn-primary" onclick="">Approvato </button></td>
		</tr>
	{/foreach}
	</table>
	<a href="index.php" > home </a>
</div>




