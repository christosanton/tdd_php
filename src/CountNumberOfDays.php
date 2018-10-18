<?php 

/**
 * There are 100 prisoners and a room.
 * Each prisoner can go into the room and may change the state
 * of the lights (on/off).
 * The question is how can the prisoners know if all of them 
 * have visited the room, and how many days will this take on 
 * average.
 *
 * In the method countDays we implement a solution to the riddle
 * and using monte carlo we find an average number of days.
 *
 */

class CountNumberOfDays
{
  public function countDays()
  {
    $results = [0];

    $prisoner_who_counts = 2;
    $prisoner_counter = 0;
    $have_switched_on = [];

    do {
      $current_prisoner = rand(1, 100);

      if ((end($results) == 0) && 
            ($current_prisoner != $prisoner_who_counts) && 
              !(array_key_exists($current_prisoner, $have_switched_on)) ){

        $results[] = 1;

        $have_switched_on[$current_prisoner] = 1;
      }
      elseif( (end($results) == 1) && ($current_prisoner == $prisoner_who_counts)) {
        $results[] = 0;
        $prisoner_counter++;

      }elseif((end($results) == 1) && ($current_prisoner != $prisoner_who_counts)){
        $results[] = 1;
      }
      else {
        $results[] = 0;
      }

    } while($prisoner_counter < 99);

    return count($results);  
  }

  public function monte_carlo($number_of_simulations){
    $total = 0;
    
    for($i = 0; $i < $number_of_simulations; $i ++ ){
      $total += $this->countDays();
    }
    return $total / $number_of_simulations;
  }

  public function counting($a) {
    $counter= 0;
    $b=array_keys($a, 1);

    foreach($b as $value){
      if ($a[$value+1] == 0) {
        $counter++;
      }
    }

    return $counter;
  }

}


/*$c = new CountNumberOfDays();

print($c->monte_carlo(1000));


*/
