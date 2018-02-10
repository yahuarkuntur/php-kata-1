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
    
    function it_convertir_numero_V()
    {
    	$this->convertir('V')->shouldReturn(5);
    }
    
    function it_convertir_numero_VI()
    {
    	$this->convertir('VI')->shouldReturn(6);
    }
    
    function it_convertir_numero_VII()
    {
    	$this->convertir('VII')->shouldReturn(7);
    } 
    
    function it_convertir_numero_VIII()
    {
    	$this->convertir('VIII')->shouldReturn(8);
    }
    
    function it_convertir_numero_IX()
    {
    	$this->convertir('IX')->shouldReturn(9);
    }
    
    function it_convertir_numero_X()
    {
    	$this->convertir('X')->shouldReturn(10);
    }    
}
