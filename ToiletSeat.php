<?php

while (fscanf(STDIN, '%s', $number1) === 1){
    // Solve the test case and output the answer
echo ToiletSeatSt1($number1, 'U');
echo ToiletSeatSt1($number1, 'D');
echo ToiletSeatSt2($number1);
}

function ToiletSeatSt1($word, $LeaveSetting){

    $Prefer = str_split($word);
    $Switches = 0;
    $Seat = $Prefer[0];
    $MustLeave = $LeaveSetting;
    
    for($i = 1; $i <count($Prefer); $i++){
        if(!Compare($Prefer[$i], $Seat)){
            $Seat = $Seat == 'U' ? 'D' : 'U';
            $Switches++;
        }
        if(!Compare($MustLeave, $Seat)){
            $Seat = $MustLeave;
            $Switches++;
        }
    }
    echo $Switches."\n";
}


function ToiletSeatSt2($word){

    $Prefer = str_split($word);
    $Switches = 0;
    $Seat = $Prefer[0];
   
    
    for($i = 1; $i <count($Prefer); $i++){
        if(!Compare($Prefer[$i], $Seat)){
            $Seat = $Prefer[$i];
            $Switches++;
        }
    }
    echo $Switches."\n";
}

function Compare($Char1, $Char2){

        if($Char1 != $Char2)
        return false;

        return true;
}


?>