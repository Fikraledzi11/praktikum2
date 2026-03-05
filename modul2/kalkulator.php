<?php

function kalkulator(float $a,string $op, float $b){
    switch($op){
        case "+":
            return $a+$b;
        case "-":
            return $a-$b;
        case "*":
            return $a*$b;
        case"/":
             return($b == 0)"Error: pembagian dengan nol tidak di perbolehkan": $a/$b;
        case"%":
            return($b == 0)"Error: pembagian dengan nol tidak di perbolehkan": $a%$b;
        case"^":
            return pow($a,$b);
        default:
            return "Operator tidak valid";                    
    }
}

echo kalkulator(3,"+",5);
echo ("\n".kalkulator(10,"/",20));
echo ("\n".kalkulator(10,"x",20));
?>