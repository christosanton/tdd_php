<?php

class TextToArray
{
	public function Returnarray(){


		$a = fopen("./data/data_TextToArray", "r");

		fscanf($a, "%d\n", $scores_count);

		fscanf($a, "%[^\n]", $scores_temp);

		$scores = array_map('intval', preg_split('/ /', $scores_temp, -1, PREG_SPLIT_NO_EMPTY));

		fscanf($a, "%d\n", $alice_count);

		fscanf($a, "%[^\n]", $alice_temp);

		
		$alice = array_map('intval', preg_split('/ /', $alice_temp, -1, PREG_SPLIT_NO_EMPTY));

		fclose($a);

		return ($alice);

	}
}
