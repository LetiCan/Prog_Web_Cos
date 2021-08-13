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
		<a style="color: white;" >{$username}</a>
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
</body>