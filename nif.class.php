<?php
class Nif{

	function calcularNif($string_nif){
		if(strlen($string_nif)==9){
			$nif_temp=str_split($string_nif);
			//print_r($nif_temp);
			//echo "<br>";
			$contador=9;
			$soma_controlo=0;
			$digito_controlo_calculado=0;
			for($indice=0;$indice<8;$indice++){
				//echo $soma_controlo."=".$nif_temp[$indice]."*".($indice+2)."\n";	
				$soma_controlo+=$nif_temp[$indice]*($indice+2);
				//echo $nif_temp[$indice]."*".($indice+2).'='.$nif_temp[$indice]*($indice+2);
				//echo ' '.$soma_controlo."<br>";
				$contador--;
			}
			//echo ($soma_controlo/11)."<br>";
			$calculo_parcial=intval($soma_controlo/11);
			$calculo_parcial2=11*$calculo_parcial;
			$digito_controlo_calculado=$soma_controlo-$calculo_parcial2;
			//echo "Digito controlo calculado".$digito_controlo_calculado."<br>";
			if($digito_controlo_calculado==10)
				$digito_controlo_calculado=0;
			//echo "Digito controlo NIF=".$nif_temp[8]."<br>";
			if($digito_controlo_calculado==$nif_temp[8])
				return 0;
			else
				return 1;

		}
		return 2; // numero com comprimento invalido
	}
}

?>
