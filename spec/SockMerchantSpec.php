<?php

namespace spec;

use SockMerchant;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SockMerchantSpec extends ObjectBehavior
{
	
		function it_return_number_of_pairs_for_array_1()
		{
			$this->pairs([10,20,20,10,10,30,50,10,20])->shouldReturn(3);
		}

		function it_return_number_of_pairs_for_array_2()
		{
			$this->pairs([10,20,30])->shouldReturn(0);
		}

		function it_return_number_of_pairs_for_array_3()
		{
			$this->pairs([4,5,5,5,6,6,4,1,4,4,3,6,6,3,6,1,4,5,5,5])->shouldReturn(9);
		}
}
