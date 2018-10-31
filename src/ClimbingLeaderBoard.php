<?php

class ClimbingLeaderBoard
{
	public function scoring($scores,$alice, $alice_count)
	{
		$scorestable=[];
		$alice_ranks = [];
		$score_uniq= array_values(array_unique($scores));
		$score_uniq_count =count($score_uniq);

		$last_position = $score_uniq_count - 1;
		for ($i=0; $i<$alice_count; $i++){

			$score=$alice[$i];
			if(array_key_exists($score,$alice_ranks)){
				$scorestable[] = $alice_ranks[$score];
			}
			else {

				for ($k=$last_position; $k>=0; $k--){
					if ($score_uniq[$k] > $score){
						$alice_ranks[$score] = $k+2;
						$scorestable[]=$k+2;
						$last_position = $k;
						break;
					}elseif ($score_uniq[$k] == $score) {
						$alice_ranks[$score] = $k+1;
						$scorestable[]=$k+1;
						$last_position = $k;
						break;
					}
				}

				if(!array_key_exists($score,$alice_ranks)){
					$alice_ranks[$score] =1;
					$scorestable[]=1; 
				}

			}

		}


		return $scorestable;
	}

}