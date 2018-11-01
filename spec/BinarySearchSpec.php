<?php

namespace spec;

use BinarySearch;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BinarySearchSpec extends ObjectBehavior
{
	function it_return_rank_for_value_1()
	{
		$this->rank([100,80,70,60], 120)->shouldReturn(1);
	}

	function it_return_rank_for_value_2()
	{
		$this->rank([100,80,70,60], 75)->shouldReturn(3);
	}

	function it_return_rank_for_value_3()
	{
		$this->rank([100,80,70,60], 10)->shouldReturn(5);
	}

	function it_return_rank_for_value_4()
	{
		$this->rank([100,85,80,75,70,65,60], 81)->shouldReturn(3);
	}

}
