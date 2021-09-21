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

				
				<label for="ldn">Luogo di Nascita:</label>
				<input type="text" name="ldn" id="ldn" placeholder="Luogo di Nascita"><br>

				<label for="cdf">Codice fiscale:</label>
				<input type="text" name="cdf" id="cdf" placeholder="codice fiscale" maxlength="16"><br>

				<label for="sesso">Sesso:</label>
				<input type="checkbox" name="sesso" id="sesso" value="M" onclick="controllocheckbox()">
				<label for="M">M</label>
				<input type="checkbox" name="sesso" id="sesso" value="F" onclick="controllocheckbox()" >
				<label for="F">F</label>
				<br>
				<label for="uesr">Username:</label>
				<input type="text" id="user" name="username" placeholder="username"><br>

				<label for="psw">Password:</label>
				<input type="password" id="pwd" name="pwd" placeholder="password" ><br>

				<p id="validazione">
						<input class="btn btn-primary" type="submit" value="Registrati" name="submit" onclick="checkRegistrazione()">
						<input type="reset" value="Ripristina" name="rpr" onclick="">
				</p>
				</div>		
			<form>
		</div>
	</div>
	<a href="index.php">home</a>
</div>
