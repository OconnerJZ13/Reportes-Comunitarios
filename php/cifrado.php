<?php 
    
function cifrar($texto){

$abc = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "?", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z","A","B","C","D","E","F","G","H","I","J","K","L","M","N","?","O","P","Q","R","S","T","U","V","W","X","Y","Z","0","1","2","3","4","5","6","7","8","9","@",".",",",":",";","!","#","$","%","&","/","(",")","=","'","¡","+","-","_","{","}","[","]");

    $texto= utf8_decode($texto);
    
    $cifra="";

    for ($i = 0; $i < strlen($texto); $i++) {
        if (charAt($texto,$i) != ".") {
            for ($j = 0; $j < count($abc); $j++) {   
                //echo $abc[$j]." == ".charAt($texto, $i)."<br>";    
                if ($abc[$j] == charAt($texto, $i)) {
                    $pos = $j;
                    break;
                }
            }
            
            $cifra = $cifra.".".dechex($pos);

                              
        } else {
            $cifra = $cifra."-";
        }
    }
    $cifra=strrev($cifra);
    return ".".$cifra;

}

function descifrar($texto){

$dec=array();
$esp_pos=array();
$abc = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "?", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z","A","B","C","D","E","F","G","H","I","J","K","L","M","N","?","O","P","Q","R","S","T","U","V","W","X","Y","Z","0","1","2","3","4","5","6","7","8","9","@",".",",",":",";","!","#","$","%","&","/","(",")","=","'","¡","+","-","_","{","}","[","]");

    $txt=$texto;
    $txt=str_replace(".", "", $txt);

    $texto= strrev($texto);
    $texto= substr($texto, 1);
   

    $cifrado="";
    $des="";
    $pos=0; $aux=0;
    $letra=0;
    $post=0;
    for ($i=0; $i <strlen($texto); $i++) { 
       // echo charAt($texto,$i)." != ' ' <br>";
        if (charAt($texto,$i)!='.') {
            
             //echo charAt($texto,$i)." == '-' <br>";
            if (charAt($texto,$i) == "-"){
       //        
                    array_push($esp_pos, ($i-$aux)); 
                    
            }else{
               
                $cifrado.= charAt($texto,$i);
                if(strlen($cifrado)>1){
                  // echo $cifrado."";
                   $aux++;
                 }
            
            }  
        }else {
            array_push($dec, hexdec($cifrado));
            $cifrado="";
            $aux++;
            
            //echo "<br>";
        }
    
        // echo "<br>";
    }   
   
    for ($i=0; $i < count($dec); $i++) { 
         $letra= $dec[$i];
         $des.=$abc[$letra]; 
     } 


     $result = array();
    if (count($esp_pos) > 0) {
        $posi = strlen($des);
        
        $s=0;
        $w=0;
        $bool=0;
        $fin=0;
        $ind=0;

        for ($r = 0; $r < count($esp_pos); $r++) {
            $ind++;
            while($posi>0){
                
                if($bool==0){
                    $w= $esp_pos[$r]-1;
                }else{
                    $w= $esp_pos[$r]-($ind);
                }
                
                if ($w == $s) {
                    
                    array_push($result, charAt($des,$s));
                    array_push($result, ".");
                  
                    $bool=1;
                    $s++;
                    break;
                } else {
                    array_push($result, charAt($des,$s));

                }
                $posi--;
                $s++;
            }
            $fin=$r-1;
             $posi--;
        }
           while($posi>0){
                
                array_push($result, charAt($des,$s));
               
                $posi--;
                $s++;
            }
       
    } else {
        for ($t = 0; $t < strlen($des); $t++) {
             array_push($result, charAt($des,$t));
        }
    }

    //echo "<br>";
    $desci="";
    for ($u = 0; $u < count($result); $u++) {
        $desci= $desci."".$result[$u];
    }
    
return str_replace("?", "&ntilde", $desci);
}

function charAt($str, $pos)
{
  return $str[$pos];
}

 ?>