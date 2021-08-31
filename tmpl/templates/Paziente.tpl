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

<body  class="container-fluid">
<div id="header">
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center " >
		<a class="navbar-brand"><img src="img/Senza titolo-1.png" width="80px" heigth="25px" ></a>
		<a class="nav-link" href="#infopa" data-toggle="collapse" style="color: white;"> {$P.username}</a>
	</nav>
</div>


<div  class="container-fluid" id="paz">

    
	<br><br>
	<table width='100%' >
	<tr>
	<td><button id="storico"  class="btn btn-primary" onclick="fun1()">Storico delle prenotazioni</button></td>
	<td><button id="pre"  class="btn btn-primary" onclick="" >Prenotazione Tampone</button></td>
	<td><button id="pass"  class="btn btn-primary" onclick="">Richiesta Passaporto</button></td>
    <td><button id="dosi"  class="btn btn-primary" onclick="">Caricamento dosi</button></td>
	</tr>
	</table>
 
<br>
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
                {$P.nome}
            </td>                
        </tr>
        <tr>
            <td>
                <label>Cognome:</label>  
            </td>
            <td>
                {$P.cognome}
            </td>  
        </tr>
         <tr>
            <td>
                <label>Codice fiscale:</label>  
            </td>
            <td>
                {$P.cod_fisc}
            </td>  
        </tr> 
    </table>
</div>

<br>
<form method="POST" action="index.php">
    <input type="submit" name="lgo" value="Logout"></input>
</form>
</body>
