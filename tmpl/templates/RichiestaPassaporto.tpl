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
<div  class="container-fluid" id="paz">

    
	<br><br>
	<table width='100%' >
	<tr>
	<br><br>
	 <table>
        <tr>
            <td>
                <label>Nome:</label>  
            <input type="tex" placeholder="Nome"  id="ogg" name="ogg" >
            </td>                
        </tr>
        <tr>
            <td>
                <label>Cognome:</label>  
             <input type="tex" placeholder="Cognome"  id="ogg" name="ogg" >
            </td>  
        </tr>
        <tr>
            <td>
                <label>Data di nascita:</label>  
             <input type="data" placeholder="DataNscita"  id="ogg" name="ogg" >
            </td>  
        </tr> 
        
        <tr>
            <td>
                <label>Luogo di nascita:</label>  
             <input type="tex" placeholder="LuogoNascita"  id="ogg" name="ogg" >
            </td>  
        </tr>
          <tr>
            <td>
                <label>Sesso:</label>  
             <input type="checkbox" name="sesso" id="sesso" value="M" onclick="controllocheckbox()">
			<label for="M">M</label>
			<input type="checkbox" name="sesso" id="sesso" value="F" onclick="controllocheckbox()" >
			<label for="F">F</label>
            </td>  
        </tr>
          <tr>
            <td>
                <label>Stato prima dose:</label>  
            <button id="approva" type="button" class="btn btn-primary" onclick="">Approvato </button></td>
            </td>  
        </tr>
          <tr>
            <td>
                <label>Stato seconda dose:</label>  
               <button id="approva" type="button" class="btn btn-primary" onclick="">Approvato </button></td>
            </td>  
        </tr>
        <tr>
            <td>
                <label>Codice fiscale:</label>  
             <input type="tex" placeholder="CodFis"  id="ogg" name="ogg" >
            </td>  
        </tr>
        <tr>
            <td>
                <label>Codice passaporto:</label>  
            <input type="tex" placeholder="CodicePass"  id="ogg" name="ogg" >
            </td>  
        </tr>
        <tr>
            <td>
                <label>Data richiesta:</label>  
				<input type="date" placeholder="data" id="data" name="data" >
            </td>  
        </tr>
        <tr>
            <td>
                <label>Data rilascio:</label>  
            <input type="date" placeholder="data" id="data" name="data" >

            </td>  
        </tr>
        <tr>
            <td>
                <label>Stato di approvazione:</label>  
            <button id="approva" type="button" class="btn btn-primary" onclick="">Approvato </button></td>
            </td>  
        </tr>
    </table>
	</tr>
	</table>
        
        
 

<br>
<a href="index.php">home</a>
</div>
