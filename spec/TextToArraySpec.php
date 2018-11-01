<?php

namespace spec;

use TextToArray;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TextToArraySpec extends ObjectBehavior
{
    function it_returns_array_from_text()
	{
		$this->Returnarray()->shouldReturn([8,2,3]);
	}

}
