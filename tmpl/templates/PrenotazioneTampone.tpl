<head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 </head>
 <style>
  a{color: white;}
 input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

#box h1 {
  padding: 1em;
  background-color:#B0E0E6	;
  color:#fefefe ;
  }
.container {
  padding: 16px;
  height: auto;
}
div {
  padding: 25px 55px;
}

.modal {
  display: none; /* Hidden by default */
  position: relative; 
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 50%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 50px;
}
#box {
  background-color: #B0E0E6	;
  color:#000000 ;
  }

.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 25%; /* Could be more or less, depending on screen size */
}
.container-fluid
{
  width:100%;
  height: 90px;
}
#validazione
{
	float:right;
}  </style>
<div id="header">
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center fixed-top" >
		<a class="navbar-brand" href="#">Logo</a>
		<a class="nav-link" href="#infopa" data-toggle="collapse"> {$username}</a>

	</nav>
	</div>
    <div  class="container-fluid" id="paz">
	
	 <table>
	 <div id="box">
	<h1>Prenotazione Online</h1>
	</div>
	
	<br><br>
	<h2><p align= center>Prenotazione tampone covid-19</p></h2>
	<i><p align= center>Indicazioni generali</p></i>
	<p align= center>Ti ricordiamo che per il tampone molecolare la prescrizione medica è necessaria in Lombardia e Campania. Per il tampone antigenico rapido la prescrizione
						medica è necessaria in Sardegna e Lombardia.
						É possibile prenotare il test salivare nei centri
						COS del Lazio scegliendo il servizio “Tampone molecolare
						e Salivare”</p>
<br>	
<table  align="center" bgcolor="#B0E0E6">
<tr>
<td   background-color: #fefefe;>
<font color="#000000">	
	<table>
	
	<p align= center>
	<br>
	   Seleziona Provincia:
	   <select name='Provincia'>

        <option value='A'>Chieti</option>

        <option value='B'>L'Aquila</option>

        <option value='C'>Pescara</option>
		
		<option value='D'>Teramo</option>
	
    </select>
	<br><br>
	Seleziona Servizio:
	<select name='Servizio'>
