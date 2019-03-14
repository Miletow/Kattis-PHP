<?php

$Cups = array();
$numberCups;
fscanf(STDIN, '%d', $numberCups);

for($i = 0; $i<$numberCups; $i++){
    // Solve the test case and output the answer
    fscanf(STDIN, '%s%s', $number1, $number2);
   array_push($Cups, Cups($number1, $number2));
}

sortCups($Cups);
function Cups($number1, $number2){
    
    if(is_numeric($number1)){
        $Cup = array(
            "number" => $number1/2,
            "color" => $number2
        );
    }else{
        $Cup = array(
            "number" => $number2,
            "color" => $number1
        );
    }

   return $Cup;

}

function sortCups($Cups){

    usort($Cups, function ($item1, $item2) {
        return $item1['number'] <=> $item2['number'];
    });

    foreach ($Cups as $Cup){
        echo $Cup['color']."\n";
    }
}


?>