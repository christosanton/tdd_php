<?php

namespace spec;

use MagicSquare;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MagicSquareSpec extends ObjectBehavior
{
	function it_returns_zero_for_magic_square()
	{
		$this->magicSquareCost([[8,3,4],[1,5,9],[6,7,2]])->shouldReturn(0);
	}


	function it_returns_the_min()
	{
		$this->magicSquareCost([[5,3,4], [1,5,8],[6,4,2]])->shouldReturn(7);

	}
}
