// An electricity board charges to its consumer as per following rules 

// a. For first 100 units, the rate is Rs. 3 per unit 
// b. For next 150 units, the rate is Rs. 5 per unit 
// c. For rest of the units, the rate is Rs. 6 per unit 
// d. A meter rent of Rs. 20 and govt duty 5% on total cost of unit is added 
// with the bill 
// e. A additional surcharge 2% on total cost of unit is also added with the 
// bill if total cost of unit goes above Rs. 600 
// f. Note that all meter is four digited  

// Calculate the bill of a consumer where present and previous readings 
// will be the input




<?php
$previous_reading = 2000;
$present_reading = 4000;
$consumed_units = $present_reading - $previous_reading;

if($previous_reading < 0)   {
    echo"Invlid Input. Previous reading can't be negative.";
}else if($previous_reading > $present_reading)    {
    echo"Invalid Inputs. Previous Reading Can't Be lesser Than Present Reading.";
}else if(((strlen((string)$previous_reading)) >= 5) || ((strlen((string)$previous_reading)) >= 5)) {
    echo"Invalid Inputs. The Meter is digited. Above four digited number is not allowed.";
}else if($consumed_units <= 100)    {
    $total_rate = $consumed_units * 3;
}else if(($consumed_units > 100) && ($consumed_units <= 250))   {
    $total_rate = ((100 * 3) + ($consumed_units - 100) * 5);
}else if(($consumed_units > 250))    {
    $total_rate = ((100 * 3) + (150 * 5) + ($consumed_units - 250) * 6);
}else   {
    echo"Invalid readings";
}

if($total_rate >= 0)    {
    $total_rate += 20;
    $total_rate = $total_rate + (($total_rate * 5) / 100);

    if($total_rate > 600)   {
        $final_cost = $total_rate + ($total_rate * 2) / 100;
    }else   {
        $final_cost = $total_rate;
    }
    
    echo"The total electricity bill will be: Rs. ".$final_cost;
}

?>
