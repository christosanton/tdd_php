<?php

class BonAppetit
{
	public function change($bill,$k,$b)
	{
		$bactual =(array_sum($bill)-$bill[$k])/2;
		if( $b != $bactual){
			return ($b-$bactual);
		}else{
			return 'Bon Appetit';
		}
	}
}
