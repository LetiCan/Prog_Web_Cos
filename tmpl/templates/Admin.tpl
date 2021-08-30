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

<body  class="container-fluid">
<div id="header">
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center fixed-top" >
		<a class="navbar-brand"><img src="img/Senza titolo-1.png" width="80px" heigth="25px" ></a>
		<a style="color: white;" >{$A.username}</a>
	</nav>
</div>

<div  class="container-fluid" id="amm">

    
	<br><br>
	<table width='100%' >
	<tr>
	<td><input type="text" placeholder="Cerca Paziente" ></td>
	<td><button id="comunica" type="button" class="btn btn-primary" onclick=""><a href="file:///C:/Users/canta/public_html/ProgettoWeb/HTML/bacheca.html">Comunicazioni</a></button></td>
	</tr>
	</table>
	<center><table border cols=8 width='100%'>
	{foreach $A as $A }
		{if $A@first}
			<tr>
			<td> ID </td>
			<td> Nome </td>
			<td> Cognome </td>
			<td> Data di nascita </td>
			<td> Luogo di nascita </td>
			<td> Codice Fiscale </td>
			<td> Tamponi effettuati </td>
			<td> Approvazione Passaporto</td>
			</tr>
		{/if}
		<tr>
		<td>$A.id</td>
		<td>$A.nome</td>
		<td>$A.cognome</td>
		<td>$A.datan</td>
		<td>$A.ldn</td>
		<td>$A.cdf</td>
		<td>$A.tf</td>
		<td><button id="approva" type="button" class="btn btn-primary" onclick="">Approvato </button></td>
		</tr>
	{/foreach}
	</table>
<!-- <tr>
<td>Valore1</td>
<td>Valore2</td>
<td>Valore3</td>
<td>Valore4</td>
<td>Valore5</td>
<td>Valore6</td>
<td>Valore7</td>
<td><button id="approva" type="button" class="btn btn-primary" onclick="">Approvato </button></td>
</tr>
<tr>
<td>Valore1</td>
<td>Valore2</td>
<td>Valore3</td>
<td>Valore4</td>
<td>Valore5</td>
<td>Valore6</td>
<td>Valore7</td>
<td><button id="approva" type="button" class="btn btn-primary" onclick="">Approvato </button></td>
</tr>
<tr>
<td>Valore1</td>
<td>Valore2</td>
<td>Valore3</td>
<td>Valore4</td>
<td>Valore5</td>
<td>Valore6</td>
<td>Valore7</td>
<td><button id="approva" type="button" class="btn btn-primary" onclick="">Approvato </button></td>
</tr>
<tr>
<td>Valore1</td>
<td>Valore2</td>
<td>Valore3</td>
<td>Valore4</td>
<td>Valore5</td>
<td>Valore6</td>
<td>Valore7</td>
<td><button id="approva" type="button" class="btn btn-primary" onclick="">Approvato </button></td>
</tr>
<tr>
<td>Valore1</td>
<td>Valore2</td>
<td>Valore3</td>
<td>Valore4</td>
<td>Valore5</td>
<td>Valore6</td>
<td>Valore7</td>
<td><button id="approva" type="button" class="btn btn-primary" onclick="">Approvato </button></td>
</tr>
<tr>
<td>Valore1</td>
<td>Valore2</td>
<td>Valore3</td>
<td>Valore4</td>
<td>Valore5</td>
<td>Valore6</td>
<td>Valore7</td>
<td><button id="approva" type="button" class="btn btn-primary" onclick="">Approvato </button></td>
</tr>
<tr>
<td>Valore1</td>
<td>Valore2</td>
<td>Valore3</td>
<td>Valore4</td>
<td>Valore5</td>
<td>Valore6</td>
<td>Valore7</td>
<td><button id="approva" type="button" class="btn btn-primary" onclick="">Approvato </button></td>
</tr>
<tr>
<td>Valore1</td>
<td>Valore2</td>
<td>Valore3</td>
<td>Valore4</td>
<td>Valore5</td>
<td>Valore6</td>
<td>Valore7</td>
<td><button id="approva" type="button" class="btn btn-primary" onclick="">Approvato </button></td>
</tr>
<tr>
<td>Valore1</td>
<td>Valore2</td>
<td>Valore3</td>
<td>Valore4</td>
<td>Valore5</td>
<td>Valore6</td>
<td>Valore7</td>
<td><button id="approva" type="button" class="btn btn-primary" onclick="">Approvato </button></td>
</tr>
-->
<br>
</div>
