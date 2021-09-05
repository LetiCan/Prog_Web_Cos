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
.container {
  padding: 16px;
  height: auto;
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
		<a class="nav-link" href="#">{$username}</a>
	</nav>
</div>

<div  class="container-fluid" id="amm">
  
	<br><br>
	<tr>
	<td><button id="annuncio" type="button" class="nav-link" onclick="document.getElementById('log').style.display='block'">Scrivi nuovo annuncio</button></td>
	</tr>
<center><table border cols=3 width='100%'>
	<tr>
	<td> DATA </td>
	<td> OGGETTO </td>
	<td> ANNUNCIO</td>
	</tr>
	<tr>
	<td>Valore1</td>
	<td>Valore2</td>
	<td>Valore3</td>
	</tr>
</div>

	<div class="modal" id="log">						
			<form method="POST" class="modal-content">
				<div class="container">
				
					<label for="data"><b>DATA</b></label>
					<input type="date" placeholder="data" id="data" name="data" >
					<br><br>
					<label for="oggetto"><b>OGGETTO</b></label>
					<input type="tex" placeholder="Oggetto"  id="ogg" name="ogg" >
					<br><br>
					<label for="annuncio"><b>ANNUNCIO</b></label>
					<br><br>
					<textarea rows="4" cols="50"></textarea>
					<br><br>
				</div>		
			</form>
	</div>
			
	<script>
		// Get the modal
		var modal = document.getElementById('log');
		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}
	</script>

