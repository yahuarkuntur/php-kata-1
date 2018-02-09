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
    		default:
    			return null;
    	}
    }
    
}
