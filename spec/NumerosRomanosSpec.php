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
    
}
