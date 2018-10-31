<?php

class SockMerchant
{
	public function pairs($ar)
	{

		$countcolours =array_count_values($ar);
		
		$pairs=0;
		
		foreach ($countcolours as $value){

			$pairs =$pairs+(int)($value/2);
		}
		
		return $pairs;
	}
}
