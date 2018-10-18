<?php


class LongFactorials
{



	public function factorial($n){

		$a=$n;
		for ($i=1; $i <= $n-2;  $i++){
			$a = bcmul($a, ($n-$i));
		}
		return $a;

	}
}
