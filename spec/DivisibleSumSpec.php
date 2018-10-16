<?php

namespace spec;

use DivisibleSum;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DivisibleSumSpec extends ObjectBehavior
{

	function it_should_return_1()
	{
		$this->calculate([1,3], 4)->shouldReturn(1);
	}

	function it_should_return_2()
	{
		$this->calculate([1,3,3], 4)->shouldReturn(2);
	}

	function it_should_return_5()
	{
		$this->calculate([1, 3, 2, 6, 1, 2], 3)->shouldReturn(5);
	}
}
