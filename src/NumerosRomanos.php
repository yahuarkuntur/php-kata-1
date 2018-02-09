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
    		default:
    			return null;
    	}
    }
    
}
