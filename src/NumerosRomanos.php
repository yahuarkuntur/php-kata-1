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
    		case 1: case 2: case 3:
    			return $this->incremento($numero);
    		case 5: case 6: case 7: case 8:
    			return 'V' . $this->incremento($numero - 5);
    		case 4:
    			return $this->decremento(5 - $numero) . 'V';
    		case 10: case 9:
    			return $this->decremento(10 - $numero) . 'X';
    		default:
    			return null;
    	}
    }
    
    
    protected function incremento($incremento)
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
    
    protected function decremento($decremento)
    {
    	switch($decremento) {
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
    
    public function obtener_decena($numero) {
    	return $numero / 10;
    }
    
}
