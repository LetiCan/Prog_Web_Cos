<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> COS </title>
  <link href="stilepagine/stile1.css" rel="stylesheet" type="text/css">
  <!--<link href="stilepagine/stile_header.css" rel="stylesheet" type="text/css">
  <link href="stilepagine/stile_footer.css" rel="stylesheet" type="text/css">-->
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
	<td><button id="pren"  class="btn btn-primary"  onclick="fun1()">Prenotazione Tampone</button></td>
	<td><button id="pass"  class="btn btn-primary" onclick="">Richiesta Passaporto</button></td>
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
                {$P.id}
            </td>
        </tr>
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
                <input type="hidden" name="id" value="{$P.id}"></input>
                <input class="btn btn-link" type="submit" name="submit" value="carica" ></input>
            </div>
        <form>
    </div>
</div>
<div>
    <form action="index.php" method="POST">
        <input type="hidden" name="user" value="{$P.username}"></input>
        <input type="submit"  class="btn btn-link" name="submit" value="Logout"></input>
    </form>
</div>
</body>