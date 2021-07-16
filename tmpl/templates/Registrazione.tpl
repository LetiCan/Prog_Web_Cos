<div id="header">
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center fixed-top" >
		<a class="navbar-brand"><img src="img/Senza titolo-1.png" width="80px" heigth="25px" ></a>
	</nav>
</div>
<div  class="container-fluid" id="rg">
    <br><br>
    <fieldset>
     <legend>
        Inserisci i tuoi dati
    </legend>
    </fieldset>
<form method="POST" action="">
	<table width="100%">
		<tbody>
			<tr>
				<td><label for="nome">Nome:</label></td>
				<td><input type="text" name="nome" id="nome" placeholder="Nome" ></td>
			</tr>
			<tr>
			<td><label for="cognome">Cognome:</label></td>
				<td><input type="text" name="cognome"  id="cognome" placeholder="Cognome"></td>
			</tr>
			<tr>
			<td><label for="datanascita">Data di Nascita:</label></td>
				<td><input type="date" name="datanascita" id="dtn"  ></td>
			</tr>
			<tr>
			<td><label for="ldn">Luogo di Nascita:</label></td>
				<td><input type="text" name="ldn" id="ldn" placeholder="Luogo di Nascita"></td>
			</tr>
			<tr>
				<td><label for="cdf">Codice fiscale:</label></td>
				<td><input type="text" name="cdf" id="cdf" placeholder="cdf" maxlength="16"></td>
			</tr>
			<tr>
				<td><label for="sesso">Sesso:</label></td>
				<td>
                                    <input type="checkbox" name="sesso" id="sesso" value="M" onclick="controllocheckbox()">
					<label for="M">M</label>
					<input type="checkbox" name="sesso" id="sesso" value="F" onclick="controllocheckbox()" >
					<label for="M">F</label>
				</td>
			</tr>
			<tr>
					<td><label for="email">email</label></td>
					<td><input type="email" name="email" id="em" placeholder="inserisci email"></td>
			</tr>
			<tr>
					<td><label for="uesr">Username</label></td>
					<td><input type="text" id="user" name="username" placeholder="username"></td>
			</tr>
			<tr>
					<td><label for="psw">Password</label></td>
					<td><input type="password" id="pwd" name="pwd" placeholder="password" ></td>
			</tr>
		</tbody>
	</table>
		<p id="validazione">
			<input type="submit" value="Registrati" name="rgs" onclick="checkRegistrazione()">
			<input type="reset" value="Ripristina" name="rpr" onclick="">
		</p>
<form>
<br>
<a href="index.php">home</a>
</div>
