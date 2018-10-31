<?php

namespace spec;

use ClimbingLeaderBoard;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ClimbingLeaderBoardSpec extends ObjectBehavior
{
	function it_return_rank_for_alices_score_1()
	{
		$this->scoring([100,100,50,40,40,20,10], [5,25,50,120], 4)->shouldReturn([6,4,2,1]);
	}

	function it_return_rank_for_alices_score_2()
	{
		$this->scoring([100,90,90,80,75,60], [50,65,77,90,102], 5)->shouldReturn([6,5,4,2,1]);
	}

}
