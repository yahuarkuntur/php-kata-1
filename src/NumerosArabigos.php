<?php

class NumerosArabigos
{
	/**
	 * Metodo para convertir un numero Romano en Arabigo.
	 * @param string $numero
	 * @return int
	 */
	public function convertir($numero)
	{
		switch($numero) { 
			case 'I':
				return 1;
			case 'II':
				return 2;
		}
	}
}
