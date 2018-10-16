<?php

namespace spec;

use PrimeFactors;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PrimeFactorsSpec extends ObjectBehavior
{
	function it_returns_an_empty_array_for_1()
	{
		$this->generate(1)->shouldReturn([]);
	}

	function it_returns_2_for_2()
	{
		$this->generate(2)->shouldReturn([2]);
	}

	function it_returns_2_2_for_input_4()
	{
		$this->generate(4)->shouldReturn([2,2]);
	}

	function it_returns_2_2_5_5for_input_100()
	{
		$this->generate(100)->shouldReturn([2,2,5,5]);
	}
}
