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
}
