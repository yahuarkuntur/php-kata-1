<?php

namespace spec;

use NumerosRomanos;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class NumerosRomanosSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(NumerosRomanos::class);
    }
    
    function it_convertir_numero_1() 
    {
    	$this->convertir(1)->shouldReturn('I');	
    }
    
    function it_convertir_numero_2()
    {
    	$this->convertir(2)->shouldReturn('II');
    }
    
    function it_convertir_numero_3()
    {
    	$this->convertir(3)->shouldReturn('III');
    }
    
    function it_convertir_numero_5()
    {
    	$this->convertir(5)->shouldReturn('V');
    }
    
    function it_convertir_numero_6()
    {
    	$this->convertir(6)->shouldReturn('VI');
    }
    
    function it_convertir_numero_7()
    {
    	$this->convertir(7)->shouldReturn('VII');
    }
    
    function it_convertir_numero_8()
    {
    	$this->convertir(8)->shouldReturn('VIII');
    }
    
    function it_convertir_numero_4()
    {
    	$this->convertir(4)->shouldReturn('IV');
    }
    
    function it_convertir_numero_10()
    {
    	$this->convertir(10)->shouldReturn('X');
    }
    
    function it_convertir_numero_9()
    {
    	$this->convertir(9)->shouldReturn('IX');
    }
    
    function it_obtener_decena_10()
    {
    	$this->obtener_decena(10)->shouldReturn(10);
    }
    
    function it_obtener_decena_20()
    {
    	$this->obtener_decena(20)->shouldReturn(20);
    }
    
    function it_obtener_decena_11()
    {
    	$this->obtener_decena(11)->shouldReturn(10);
    }
    
    function it_convertir_numero_11()
    {
    	$this->convertir(11)->shouldReturn('XI');
    }
    
    function it_convertir_numero_12()
    {
    	$this->convertir(12)->shouldReturn('XII');
    }
    
    function it_convertir_numero_13()
    {
    	$this->convertir(13)->shouldReturn('XIII');
    }
    
    function it_obtener_centena_100()
    {
    	$this->obtener_centena(100)->shouldReturn(100);
    }
    
    function it_obtener_centena_200()
    {
    	$this->obtener_centena(200)->shouldReturn(200);
    }
    
    function it_obtener_centena_110()
    {
    	$this->obtener_centena(110)->shouldReturn(100);
    }
    
    function it_convertir_numero_50()
    {
    	$this->convertir(50)->shouldReturn('L');
    }
    
    function it_convertir_numero_33()
    {
    	$this->convertir(33)->shouldReturn('XXXIII');
    }
    
    function it_convertir_numero_555()
    {
    	$this->convertir(555)->shouldReturn('DLV');
    }
    
    function it_convertir_numero_84()
    {
    	$this->convertir(84)->shouldReturn('LXXXIV');
    }
    
    function it_convertir_numero_741()
    {
    	$this->convertir(741)->shouldReturn('DCCXLI');
    }
    
    function it_convertir_numero_944()
    {
    	$this->convertir(944)->shouldReturn('CMXLIV');
    }
    
    function it_convertir_numero_1001()
    {
    	$this->convertir(1001)->shouldReturn('MI');
    }
    
    function it_convertir_numero_1999()
    {
    	$this->convertir(1999)->shouldReturn('MCMXCIX');
    }
    
}
