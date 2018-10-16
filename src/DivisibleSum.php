<?php

class DivisibleSum
{
	public function calculate( $a, $b)
	{
		$counter=0;

		$limit = count($a);

		for ($i=0; $i<$limit-1; $i++){

			for ($j=$i+1; $j<$limit; $j++){

				if ( ($a[$i]+ $a[$j]) % $b == 0 ){

					$counter++;
				}

			}
		}

		return $counter;

	}

}
