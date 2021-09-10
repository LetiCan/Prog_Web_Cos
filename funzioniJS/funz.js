function Rgst()
{/*
	$(document).ready( function(){ 
    $("#demo").hide();
    $("#rp").click( function(){
    $("#demo").toggle("slow");
    });
    });*/
    $(document).ready(function(){
	$("#rg").click(function(){
	$("#boxs").load("tmpl/templates/Registrazione.tpl #box");
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
	$("#content").load("tmpl/templates/StoricoPrenotazioni.tpl #storicopre");
	});
	});
    $(document).ready(function(){
        $("#pren").click(function(){
            $("#content").load("tmpl/templates/Prenotazione.tpl #pre");
        });
    });

}
function checkPrenotazione()
{
    if( document.getElementById("prov").value === "" )
    {
        alert("Impossibile inviare i dati");
        return false;
    }
    
    if( document.getElementById("lab").value === "" )
    {
        alert(" Impossibile inviare i dati");
        return false;
    }
    if( document.getElementById("datapre").value === "" )
    {
        alert(" Impossibile inviare i dati");
        return false;
    }
    return true;

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

function aggiornaOpzioni()
{
    var selezionato = document.forms[0].prov.selectedIndex;
    var campo = document.forms[0].prov.options;
    selezionaOpzioni(campo[selezionato].value);
}


function selezionaOpzioni(scelta) 
{
  var lab = document.forms[0].lab;
  lab.options.length = 0;
  if (scelta == "Pescara") 
  {
      lab.options[lab.options.length] = new Option('lab_PE_1');
      lab.options[lab.options.length] = new Option('lab_PE_2');
      lab.options[lab.options.length] = new Option('lab_PE_3');
      lab.options[lab.options.length] = new Option('lab_PE_4');
  }
  
  if (scelta == "Aquila") 
  {
      lab.options[lab.options.length] = new Option('lab_AQ_1');
      lab.options[lab.options.length] = new Option('lab_AQ_2');
  }

  if (scelta == "Chieti") 
  {
      lab.options[lab.options.length] = new Option('lab_CH_1');
      lab.options[lab.options.length] = new Option('lab_CH_2');
      lab.options[lab.options.length] = new Option('lab_CH_3');
      lab.options[lab.options.length] = new Option('lab_CH_4');
      lab.options[lab.options.length] = new Option('lab_CH_5');
      lab.options[lab.options.length] = new Option('lab_CH_6');
  }

  if (scelta == "Teramo") 
  {
      lab.options[lab.options.length] = new Option('lab_TE_1');
      lab.options[lab.options.length] = new Option('lab_TE_2');
      lab.options[lab.options.length] = new Option('lab_TE_3');

  }
  
}