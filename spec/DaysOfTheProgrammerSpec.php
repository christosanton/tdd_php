<?php

namespace spec;

use DaysOfTheProgrammer;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DaysOfTheProgrammerSpec extends ObjectBehavior
{
	function it_returns_date_for_input_year_2017()
	{
		$this->dayOfProgrammer(2017)->shouldReturn("13.09.2017");
	}

	function it_returns_date_for_input_year_1918()
	{
		$this->dayOfProgrammer(1918)->shouldReturn("26.09.1918");
	}

	function it_returns_date_for_input_year_1800()
	{
		$this->dayOfProgrammer(1800)->shouldReturn("12.09.1800");
	}

}
