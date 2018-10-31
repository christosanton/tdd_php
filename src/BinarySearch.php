<?php

class BinarySearch
{
	public function rank($arr, $x){

		$count= count($arr) - 1;
		$low = 0; 
		$high = $count;

		if ($arr[0] <= $x){
			return 1;
		}
		elseif($arr[$count] >= $x){

			return $count+2;
		}
		
		else{

			while ($low <= $high) { 


				$mid = floor(($low + $high) / 2); 


				if($arr[$mid] >= $x and $arr[$mid+1] <= $x ) { 
					
					$index= intval($mid)+2;

					return $index; 

				} 

				if ($x < $arr[$mid]) { 
            // search the left side of the array 
					$low = $mid + 1; 
				} 
				else { 
            // search the right side of the array 
					$high = $mid -1; 
				} 

			}


			

		}
		
	}

}
