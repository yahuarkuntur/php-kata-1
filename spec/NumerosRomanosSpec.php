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
}
