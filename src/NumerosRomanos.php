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
    	switch($numero) {
    		case 1:
    			return 'I';
    		case 2:
    			return 'II';
    		case 3:
    			return 'III';
    		case 5: case 6: case 7: case 8:
    			return 'V' . $this->incremento_derecho($numero - 5);
    		default:
    			return null;
    	}
    }
    
    
    public function incremento_derecho($incremento)
    {
    	switch($incremento) {
    		case 1:
    			return 'I';
    		case 2:
    			return 'II';
    		case 3:
    			return 'III';
    		default:
    			return null;
    	}
    }
    
}
