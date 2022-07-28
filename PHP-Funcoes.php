<?php

/* Função p/ descobrir números primos:

$n % 2 != 0  =>  resto de $n / 2 diferente de zero (números impares)
$n % 3 != 0  =>  resto de $n > 3 (impar) / 3 diferente de zero

*/
function numero_primo($n){
	if ($n % 2 != 0 && $n > 3){
		if($n % 3 != 0){
			echo "Sou primo";
		}else{
			echo "Nao sou primo";
		}
	}else if($n == 3){
		echo "Sou primo";	
	}else{
		echo "Não sou primo";
	}
}

numero_primo(1);