<?php

namespace spec;

use BonAppetit;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BonAppetitSpec extends ObjectBehavior
{
	function it_return_response_for_bill_1()
	{
		$this->change([3,10,2,9],1,7)->shouldReturn('Bon Appetit');
	}

	function it_return_response_for_bill_2()
	{
		$this->change([3,10,2,9],1,12)->shouldReturn(5);
	}
}
