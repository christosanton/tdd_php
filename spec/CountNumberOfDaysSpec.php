<?php

namespace spec;

use CountNumberOfDays;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CountNumberOfDaysSpec extends ObjectBehavior
{
    function it_returns_the_correct_values()
    {
        $this->counting([1,1,0,0,1,1,0])->shouldReturn(2);
        $this->counting([1,1,0,1,0,1,0])->shouldReturn(3);
    }
}
