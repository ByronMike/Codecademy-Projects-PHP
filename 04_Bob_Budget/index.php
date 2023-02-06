<?php
  
$annualExpenses = [
    "vacations" => 1000,
    "carRepairs" => 1000,    
];

$monthlyExpenses = [
    "rent" => 1500,
    "utilities" => 200,
    "healthInsurance" => 200
];

$grossSalary = 48150;
$socialSecurity = $grossSalary * .062;

$incomeSegments = [[9700, .88], [29775, .78], [8675, .76]];

// Write your code below:
$netIncome = $incomeSegments[0][0] * $incomeSegments[0][1] + $incomeSegments[1][0] * $incomeSegments[1][1] + $incomeSegments[2][0] * $incomeSegments[2][1];
echo $netIncome;

$annualIncome = $netIncome - $socialSecurity;

$annualIncome -= $annualExpenses["vacations"];
$annualIncome -= $annualExpenses["carRepairs"];

$monthlyIncome = $annualIncome / 12;

 $monthlyIncome -= $monthlyExpenses["rent"];
$monthlyIncome -= $monthlyExpenses["utilities"];
$monthlyIncome -= $monthlyExpenses["healthInsurance"];

$weeklyIncome = $monthlyIncome / 4.33;
 
echo "\nWeekly income before calculation:\n$weeklyIncome\n";

$weeklyExpenses = [
    "gas" => 26,
    "food" => 90,
    "entertainment" => 47
];

$weeklyIncome -= $weeklyExpenses["gas"];
$weeklyIncome -= $weeklyExpenses["food"];
$weeklyIncome -= $weeklyExpenses["entertainment"];
 
echo "\nWeekly income after calculation:\n$weeklyIncome\n";

$leftoverMoney = $weeklyIncome * 52;
 
echo "\nRemaining income: $leftoverMoney";
