function Rgst()
{/*
	$(document).ready( function(){ 
    $("#demo").hide();
    $("#rp").click( function(){
    $("#demo").toggle("slow");
    });
    });*/
    $(document).ready(function(){
	$("#reg").click(function(){
	$("#box").load("tmpl/templates/Registrazione.tpl #rg");
	});
	});
   /* $(document).ready(function(){
	$("#reg").click(function(){
	$("#intestazione").load("tmpl/templates/Registrazione.tpl #header");
	});
	});  */
}

function fun1()
{
	$(document).ready(function(){
	$("#storico").click(function(){
	$("#paz").load("tmpl/templates/StoricoPrenotazioni.tpl #storicopre");
	});
	});

}

function checkRegistrazione()
{
        if( document.getElementById("nome").value === "" )
		{
    		alert("Impossibile inviare i dati");
        	return false;
        }
        
        if( document.getElementById("cognome").value === "" )
		{
    		alert(" Impossibile inviare i dati");
        	return false;
        }
        if( document.getElementById("dtn").value === "" )
        {
                                alert(" Impossibile inviare i dati");
                                return false;
        }
        if( document.getElementById("cdf").value === "" )
        {
                                alert(" Impossibile inviare i dati");
                                return false;
        }
        if( document.getElementById("ldn").value === "" )
        {
                                alert(" Impossibile inviare i dati");
                                return false;
        }
        if( document.getElementById("sesso").value === "" )
        {
                        alert(" Impossibile inviare i dati");
                        return false;
        }
       /* if( document.getElementById("em").value === "" )
        {
                                alert(" Impossibile inviare i dati");
                                return false;
        }*/
        if( document.getElementById("user").value === "" )
        {
                                alert(" Impossibile inviare i dati");
                                return false;
        }
        if( document.getElementById("pwd").value === "" )
        {
        alert(" Impossibile inviare i dati");
        return false;
        }		
        return true;    
}

function checkLogin()
{
        if( document.getElementById("user").value === "" ){
    		alert("Impossibile inviare i dati");
        	return false;
        }
        
        if( document.getElementById("psw").value === "" ){
    		alert(" Impossibile inviare i dati");
        	return false;
        }  
		return true;    
}

function controllocheckbox()
{
     $(document).ready(function()
            {
                $('input:checkbox').click(function() 
                {
                    $('input:checkbox').not(this).prop('checked', false);
                });
            });
}

function openForm()
 {
    document.getElementById("log").style.display = "block";
 }