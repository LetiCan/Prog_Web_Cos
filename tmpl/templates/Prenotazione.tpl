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
<div class="container" id="pre">		
    <h1>Prenotazione Online</h1>
    <br>
	<h2><p align="center">Prenotazione tampone covid-19</p></h2>
	<i><p align= "center">Indicazioni generali</p></i>
	<p align= "center">Ti ricordiamo che per il tampone molecolare la prescrizione medica è necessaria in Lombardia e Campania. Per il tampone antigenico rapido la prescrizione
                     medica è necessaria in Sardegna e Lombardia.
                     É possibile prenotare il test salivare nei centri
                     COS del Lazio scegliendo il servizio “Tampone molecolare
                     e Salivare”
    </p>
    <br>	
    <form method="POST" action="index.php" onsubmit="checkPrenotazione()">
        <div class="container" bgcolor="#B0E0E6">
            <label > ID Utente: </label>
            <input type="number" name="id" id="id"></input><br>
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
            <input type="date" name="datapre" id="datapre"></input>
            <br>
            <input type="submit" class="btn btn-success" name="Invia" value="Invia"></input>
        </div>   
    </form>
</div>