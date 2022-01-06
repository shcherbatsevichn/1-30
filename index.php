<?php error_reporting(-1);
//Найти среди натуральных чисел n, n+1,...,2n1 
//числа-близнецы, т. е. два таких простых числа, разность между которыми равна двум.
$n = 124;
$nm = (2*$n) + 1;

$number = 0;
for ($i = $n; $i <= $nm; $i++){
    if(isjustnumder($i)){
        if($i - $number == 2 ){
            echo("{$number} - {$i}<br>");
        }
        $number = $i;
    }
}

function isjustnumder($number){
    $counter = 0;
    for ($n = 1; $n <= $number; $n++){
        if ($number % $n == 0){
            $counter++;
        }
    }
    if($counter <= 2){
        return true;
    }else{
        return false;
    }
}