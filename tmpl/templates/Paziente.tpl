<div id="header">
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center fixed-top" >
		<a class="navbar-brand" href="#">Logo</a>
		<a class="nav-link" href="#infopa" data-toggle="collapse"> {$username}</a>

	</nav>
</div>

<div  class="container-fluid" id="paz">

    
	<br><br>
	<table width='100%' >
	<tr>
	<td><button id="storico" type="button" class="btn btn-primary">Storico delle prenotazioni</button></td>
	<td><button id="approva" type="button" class="btn btn-primary" >Richiesta Passaporto</button></td>
	<td><button id="comunica" type="button" class="btn btn-primary" onclick="">Prenotazione Tampone</button></td>
        <td><button id="comunica" type="button" class="btn btn-primary" onclick="">Caricamento dosi</button></td>
	</tr>
	</table>
        
        
 

<br>
<a href="index.php">home</a>
</div>

<!-- informazioini del pazinete -->
<div class="collapse" id='infopa'>
    <table>
        <tr>
            <td>
                <label>Nome:</label>  
            </td>
            <td>
                {$nome}
            </td>                
        </tr>
        <tr>
            <td>
                <label>Cognome:</label>  
            </td>
            <td>
                {$cognome}
            </td>  
        </tr>
         <tr>
            <td>
                <label>Codice fiscale:</label>  
            </td>
            <td>
                {$cod_fisc}
            </td>  
        </tr> 
    </table>
</div>
