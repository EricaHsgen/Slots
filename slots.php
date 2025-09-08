<?php

$symbolArray = ["A","B","C"];
$payout = 0;
$spins = 0;
$total = 0;

while($payout < 500){
    if($spins == 21) break;
    
    //create string from 3 randomly selected characters from symbolArray
    $char1 = $symbolArray[array_rand($symbolArray)];
    $char2 = $symbolArray[array_rand($symbolArray)];
    $char3 = $symbolArray[array_rand($symbolArray)];
    $prizeString = "$char1$char2$char3";

    $payoff = 0;
    $payoff = match($prizeString){
        "AAA", "BBB", "CCC" => 100,
        "AAB", "ABA", "BAA", "ABB", "BBA", "BAB", "BCC", "CBC", "CCB", "ACC", "CAC", "CCA" => 50,
        default => 0
    };
    echo("$prizeString Payoff: $payoff\n");

    $total += $payoff;
    $spins += 1;
}
echo("Game over. Total winnings: $total");
?>