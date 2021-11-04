<?php
//include 'codici_comuni.txt';
class Utility
{
    private function Nome($s)
    {
        $vocali=array("A","E","I","O","U");
        $s=strtoupper($s);
        $s=str_replace(" ","",$s);
        $v=str_split($s);
        $j=0;
        $k=0;
        for($i=0;$i<sizeof($v);$i++)// caso con almeno 4 consonanti
        {
            
            if(!in_array($v[$i],$vocali))
            {
                $j++;
                $cons[$j]=$v[$i];
            }	
            else{
                $k++;
                $voc[$k]=$v[$i];
            }
            	
        }
        if($j>=4)
        {
            $r=$cons[1].$cons[3].$cons[4];
        }
        if($j==3)
        {
            $r=$cons[1].$cons[2].$cons[3];
        }
        if($j==2)
        {
            $r=$cons[1].$cons[2].$voc[1];
        }
        else
        {
            $r=$cons[1].$voc[1].$voc[2];
        }
        return $r;

    }
    private function Cognome($s)
    {
        $vocali=array("A","E","I","O","U");
        $s=strtoupper($s);
        $s=str_replace(" ","",$s);
        $v=str_split($s);
        $j=0;
        foreach($v as $w=>$w_value)// caso consonanti
        {
            if(!in_array($w_value,$vocali) && ($j<3) )
            {
                $v1[$j]=$w_value;
                $j++;
            }		
        }
        $b=3-count($v1);
        $i=0;
        while(sizeof($v1)<3) //caso con meno di 3 consonanti
        {
            if(in_array($v[$i],$vocali))
            {
                $v1[$b+1]=$v[$i];
            }
            $i++;
            $b+=1;
        }
        $r=implode($v1);
        return $r;
    }

    private function Lettera_mese($num_mese)
    {

        $mese=array("A"=>"01","B"=>"02","C"=>"03","D"=>"04","E"=>"05","H"=>"06","L"=>"07","M"=>"08","P"=>"09","R"=>"10","S"=>"11","T"=>"12");
        $ms=array_search($num_mese,$mese);
        return $ms;
    }

    private function giornoN($dataN,$sesso)
    {
        $sesso=strtoupper($sesso);
        if(strcmp($sesso,"F")==0)
        {
            $gg=40+(int)$dataN;
            $gg=(String)$gg;
        }
        else
        {
            $gg=$dataN;
        }
        return $gg;
    } 

    private function cod_com($comune,$provincia)
    {
        $codcom="";
        $comune=strtoupper($comune);
        $provincia=strtoupper($provincia);
        $file=fopen("C:\Users\danue\public_html\PROG_WEB_COS\impo\codici_comuni.txt","r")or die("Impossibile aprire il file!");
        while(!feof($file))
        {
            $s=fgets($file);
            list($cdc,$c,$pr)=explode(";",$s);
            if((strncmp($pr,$provincia,2)==0) and (strcmp($c,$comune)==0))
            {
                $codcom=$cdc;
            }				
        }
        fclose($file);
        return $codcom;
    }
   

    private function Assembla($cdf)
    {
        $k="";
        $somma=0;
        $charpari=array("0"=>0,"1"=>1,"2"=>2,"3"=>3,"4"=>4,"5"=>5,"6"=>6,"7"=>7,"8"=>8,"9"=>9,"A"=>0,"B"=>1,"C"=>2,"D"=>3,"E"=>4,"F"=>5,"G"=>6,"H"=>7,"I"=>8,"J"=>9,"K"=>10,"L"=>11,"M"=>12,"N"=>13,"O"=>14,"P"=>15,"Q"=>16,"R"=>17,"S"=>18,"T"=>19,"U"=>20,"V"=>21,"W"=>22,"X"=>23,"Y"=>24,"Z"=>25);
        $chardispari=array("0"=>1,"1"=>0,"2"=>5,"3"=>7,"4"=>9,"5"=>13,"6"=>15,"7"=>17,"8"=>19,"9"=>21,"A"=>1,"B"=>0,"C"=>5,"D"=>7,"E"=>9,"F"=>13,"G"=>15,"H"=>17,"I"=>19,"J"=>21,"K"=>2,"L"=>4,"M"=>18,"N"=>20,"O"=>11,"P"=>3,"Q"=>6,"R"=>8,"S"=>12,"T"=>14,"U"=>16,"V"=>10,"W"=>22,"X"=>25,"Y"=>24,"Z"=>23);
        $charcontrollo=array(0=>"A",1=>"B",2=>"C",3=>"D",4=>"E",5=>"F",6=>"G",7=>"H",8=>"I",9=>"J",10=>"K",11=>"L",12=>"M",13=>"N",14=>"O",15=>"P",16=>"Q",17=>"R",18=>"S",19=>"T",20=>"U",21=>"V",22=>"W",23=>"X",24=>"Y",25=>"Z");
        $charcdf=str_split($cdf);
        $vett=array(1=>$charcdf[0],2=>$charcdf[1],3=>$charcdf[2],4=>$charcdf[3],5=>$charcdf[4],6=>$charcdf[5],7=>$charcdf[6],8=>$charcdf[7],9=>$charcdf[8],10=>$charcdf[9],11=>$charcdf[10],12=>$charcdf[11],13=>$charcdf[12],14=>$charcdf[13],15=>$charcdf[14]);
        for($i=1;$i<=sizeof($vett);$i++)
        {
            echo $vett[$i];
            if($i%2 == 0)
            {
                $somma=$somma+($charpari[$vett[$i]]);
            }
            else
            {
                $somma=$somma+($chardispari[$vett[$i]]);
            }
        }      
        $resto=$somma/26; 
        $resto=floor($resto);
        $mol=26*$resto;
        $diff=abs($mol-$somma);
        $k=$charcontrollo[$diff];
        $codice=$cdf.$k;
        return $codice;
    }

    public function Check_cdf($nome,$cognome,$dta,$lgn,$sex)
    {
        $nm=$this->Nome($nome);
        $cgn=$this->Cognome($cognome);
        $d=str_replace("-","",$dta);
        $anno=substr($d,2,2);
        $nms=substr($d,4,2);
        $mese=$this->Lettera_mese($nms);
        $g=substr($d,6,2);
        $giorno=$this->giornoN($g,$sex);
        $codice=$this->cod_com($lgn['com'],$lgn['pro']);
        $cdf=$cgn.$nm.$anno.$mese.$giorno.$codice;
        $codice_fiscale=$this->Assembla($cdf);
        return $codice_fiscale;
    }
}
?>