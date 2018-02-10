<?php

/**
 * 
 * @author brian
 *
 */
class NumerosRomanos
{
	/**
	 * Metodo para convertir un numero entero en numero Romano.
	 * @param int $numero
	 * @return string
	 */
    public function convertir($numero)
    {
    	if ( $numero >= 1000 ) {
    		$mil = $this->obtener_mil($numero);
    		$centena = $this->obtener_centena($numero - $mil);
    		$decena = $this->obtener_decena($numero - $centena);
    		return $this->miles($mil) . $this->centenas($centena) . $this->decenas($decena) . $this->numeros_base($numero-$decena);
    	}
    	
    	if ( $numero >= 100 ) {
    		$centena = $this->obtener_centena($numero);
    		$decena = $this->obtener_decena($numero - $centena);
    		return $this->centenas($centena) . $this->decenas($decena) . $this->numeros_base($numero-$decena-$centena);
    	}
    	
    	if ( $numero >= 10 ) {
    		$decena = $this->obtener_decena($numero);
    		return $this->decenas($decena) . $this->numeros_base($numero-$decena);
    	}
    	
   		return $this->numeros_base($numero);
    }
    
    
    protected function numeros_base($numero)
    {
    	switch($numero) {
    		case 1:
    			return 'I';
    		case 2:
    			return 'II';
    		case 3:
    			return 'III';
    		case 4:
    			return 'IV';
    		case 5:
    			return 'V';
    		case 6:
    			return 'VI';
    		case 7:
    			return 'VII';
    		case 8:
    			return 'VIII';
    		case 9:
    			return 'IX';
    		case 10:
    			return 'X';
    	}
    }
    
    
    protected function decenas($numero)
    {
    	switch($numero) {
    		case 10:
    			return 'X';
    		case 20:
    			return 'XX';
    		case 30:
    			return 'XXX';
    		case 40:
    			return 'XL';
    		case 50:
    			return 'L';
    		case 60:
    			return 'LX';
    		case 70:
    			return 'LXX';
   			case 80:
   				return 'LXXX';
   			case 90:
   				return 'XC';
   			case 100:
   				return 'C';
    	}
    }
    
    
    protected function centenas($numero)
    {
    	switch($numero) {
    		case 100:
    			return 'C';
    		case 200:
    			return 'CC';
    		case 300:
    			return 'CCC';
    		case 400:
    			return 'CD';
   			case 500:
   				return 'D';
   			case 600:
   				return 'DC';
   			case 700:
   				return 'DCC';
   			case 800:
   				return 'DCCC';
   			case 900:
   				return 'CM';
   			case 1000:
   				return 'M';
    	}
    }
    
    protected function miles($numero)
    {
    	switch($numero) {
    		case 1000:
    			return 'M';
    	}
    }
    
    
    public function obtener_decena($numero) {
    	return (int) ($numero / 10) * 10;
    }
    
    public function obtener_centena($numero) {
    	return (int) ($numero / 100) * 100;
    }
    
    public function obtener_mil($numero) {
    	return (int) ($numero / 1000) * 1000;
    }
    
}
