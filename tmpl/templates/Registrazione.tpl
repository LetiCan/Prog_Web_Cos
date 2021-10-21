<div  class="container-fluid" id="box">
	<div class="row" id="header">
		<div class="col-sm">
			<nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center" >
				<a class="navbar-brand"><img src="img/Senza titolo-1.png" width="80px" heigth="25px" ></a>
			</nav>
		</div>
	</div>
	<div class="row">
		<div class="col-sm">
			<fieldset>
				<legend>
					Inserisci i tuoi dati
				</legend>
			</fieldset>
		</diV>
	</div>
	<div class="row">
		<div class="colcol-sm" id="freg">
			<form method="POST" action="index.php">
				<div class="form-group">
				<label for="nome">Nome:</label>
				<input type="text" name="nome" id="nome" placeholder="Nome" ><br>

				<label for="cognome">cognome:</label>
				<input type="text" name="cognome" id="cognome" placeholder="cognome" ><br>

				<label for="datanascita">Data di Nascita:</label>
				<input type="date" name="datanascita" id="dtn" ><br>

				
				<label for="ldn">Comune di Nascita:</label>
				<input type="text" name="ldn" id="ldn" placeholder="Comune di Nascita"><br>
				<label for="prov">Provincia:</label>
				<select name="prov" id="prov">
					<option value="Agrigento">AG</option>
					<option value="Alessandria">AL</option>
					<option value="Ancona">AN</option>
					<option value="Aosta">AO</option>
					<option value="Arezzo">AR</option>
					<option value="Ascoli Piceno">AP</option>
					<option value="Asti">AT</option>
					<option value="Avellino">AV</option>
					<option value="Bari">BA</option>
					<option value="Barletta-Andria-Trani">BT</option>
					<option value="Belluno">BL</option>
					<option value="Benevento">BN</option>
					<option value="Bergamo">BG</option>
					<option value="Biella">BI</option>
					<option value="Bologna">BO</option>
					<option value="Bolzano">BZ</option>
					<option value="Brescia">BS</option>
					<option value="Brindisi">BR</option>
					<option value="Cagliari">CA</option>
					<option value="Caltanissetta">CL</option>
					<option value="Campobasso">CB</option>
					<option value="Carbonia-Iglesias">CI</option>
					<option value="Caserta">CE</option>
					<option value="Catania">CT</option>
					<option value="Catanzaro">CZ</option>
					<option value="Chieti">CH</option>
					<option value="Como">CO</option>
					<option value="Cosenza">CS</option>
					<option value="Cremona">CR</option>
					<option value="Crotone">KR</option>
					<option value="Cuneo">CN</option>
					<option value="Enna">EN</option>
					<option value="Fermo">FM</option>
					<option value="Ferrara">FE</option>
					<option value="Firenze">FI</option>
					<option value="Foggia">FG</option>
					<option value="Forlì-Cesena">FC</option>
					<option value="Frosinone">FR</option>
					<option value="Genova">GE</option>
					<option value="Gorizia">GO</option>
					<option value="Grosseto">GR</option>
					<option value="Imperia">IM</option>
					<option value="Isernia">IS</option>
					<option value="La Spezia">SP</option>
					<option value="L'Aqulia">AQ</option>
					<option value="Latina">LT</option>
					<option value="Lecce">LE</option>
					<option value="Lecco">LC</option>
					<option value="Livorno">LI</option>
					<option value="Lodi">LO</option>
					<option value="Lucca">LU</option>
					<option value="Macerata">MC</option>
					<option value="Mantova">MN</option>
					<option value="Massa-Carrara">MS</option>
					<option value="Matera">MT</option>
					<option value="Medio Campidano">VS</option>
					<option value="Messina">ME</option>
					<option value="Milano">MI</option>
					<option value="Modena">MO</option>
					<option value="Monza e Brianza">MB</option>
					<option value="Napoli">NA</option>
					<option value="Novara">NO</option>
					<option value="Nuoro">NU</option>
					<option value="Ogliastra">OG</option>
					<option value="Olbia-Tempio>OT</option>
					<option value="Oristano">OR</option>
					<option value="Padova">PD</option>
					<option value="Palermo">PA</option>
					<option value="Parma">PR</option>
					<option value="Pavia">PV</option>
					<option value="Perugia">PG</option>
					<option value="Pesaro e Urbino">PU</option>
					<option value="Pescara">PE</option>
					<option value="Piacenza">PC</option>
					<option value="Pisa">PI</option>
					<option value="Pistoia">PT</option>
					<option value="Pordenone">PN</option>
					<option value="Potenza">PZ</option>
					<option value="Prato">PO</option>
					<option value="Ragusa">RG</option>
					<option value="Ravenna">RA</option>
					<option value="Reggio Calabria">RC</option>
					<option value="Reggio Emilia">RE</option>
					<option value="Rieti">RI</option>
					<option value="Rimini">RN</option>
					<option value="Roma">RM</option>
					<option value="Rovigo">RO</option>
					<option value="Salerno">SA</option>
					<option value="Sassari">SS</option>
					<option value="Savona">SV</option>
					<option value="Siena">SI</option>
					<option value="Siracusa">SR</option>
					<option value="Sondrio">SO</option>
					<option value="Taranto">TA</option>
					<option value="Teramo">TE</option>
					<option value="Terni">TR</option>
					<option value="Torino">TO</option>
					<option value="Trapani">TP</option>
					<option value="Trento">TN</option>
					<option value="Treviso">TV</option>
					<option value="Trieste">TS</option>
					<option value="Udine">UD</option>
					<option value="Varese">VA</option>
					<option value="Venezia">VE</option>
					<option value="Verbano-Cusio-Ossola">VB</option>
					<option value="Vercelli">VC/option>
					<option value="Verona">VR</option>
					<option value="Vibo Valentia">VV</option>
					<option value="Vicenza">VI</option>
					<option value="Viterbo">VT</option>
            	</select>
				<br>

				<label for="sesso">Sesso:</label>
				<input type="checkbox" name="sesso" id="sesso" value="M" onclick="controllocheckbox()">
				<label for="M">M</label>
				<input type="checkbox" name="sesso" id="sesso" value="F" onclick="controllocheckbox()" >
				<label for="F">F</label>
				<br>

				<label for="cdf">Codice fiscale:</label>
				<input type="text" name="cdf" id="cdf" placeholder="codice fiscale" maxlength="16"><br>

				<label for="uesr">Username:</label>
				<input type="text" id="user" name="username" placeholder="username"><br>

				<label for="psw">Password:</label>
				<input type="password" id="pwd" name="pwd" placeholder="password" ><br>

				<p id="validazione">
						<input class="btn btn-primary" type="submit" value="Registrati" name="submit" onclick="checkRegistrazione()">
						<input type="reset" value="Ripristina" name="rpr">
				</p>
				</div>		
			<form>
		</div>
	</div>
	<a href="index.php">home</a>
</div>
