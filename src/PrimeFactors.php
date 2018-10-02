<?php

class PrimeFactors
{
	public function generate($number)
	{

		$prime = 2;
		$prime_factors=[];
		while($number != 1){

			if ($number % $prime ==0){
				array_push($prime_factors, $prime);
				$number = $number / $prime;

			}

			else{

				$prime++;

			}

		}

		return $prime_factorsh;

	}

}
