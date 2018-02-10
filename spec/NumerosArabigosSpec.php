<?php

namespace spec;

use NumerosArabigos;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class NumerosArabigosSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(NumerosArabigos::class);
    }
    
    function it_convertir_numero_I()
    {
    	$this->convertir('I')->shouldReturn(1);
    }
    
    function it_convertir_numero_II()
    {
    	$this->convertir('II')->shouldReturn(2);
    }
    
    function it_convertir_numero_III()
    {
    	$this->convertir('III')->shouldReturn(3);
    }
    
    function it_convertir_numero_IV()
    {
    	$this->convertir('IV')->shouldReturn(4);
    }
    
}
