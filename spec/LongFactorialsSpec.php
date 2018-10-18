<?php

namespace spec;

use LongFactorials;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class LongFactorialsSpec extends ObjectBehavior
{
    function it_returns_factorial_for_input_3()
	{
		$this->factorial(3)->shouldReturn('6');
	}

	function it_returns_factorial_for_input_5()
	{
		$this->factorial(5)->shouldReturn('120');
	}

	function it_returns_factorial_for_input_6()
	{
		$this->factorial(6)->shouldReturn('720');
	}

	function it_returns_factorial_for_input_25()
	{
		$this->factorial(25)->shouldReturn('15511210043330985984000000');
	}
}



