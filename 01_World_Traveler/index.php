/* 
Hello there, friend! We’re exhausted having just returned to New York City from a whirlwind of world travel. We’re bringing all our international currency to the bank to be exchanged for USD. Our travels have made us wise and weary, and we want to ensure we’re being treated fairly. Can you help?

Write a program to calculate exactly how much cash in USD we should end up with after it has all been exchanged.
*/

<?php 

$riel = 2103942;
$kyat = 19092;
$krones = 109;
$lek = 9094;

echo 
"Riel : $riel \n
Kyat : $kyat \n
Krones : $krones \n
Lek : $lek \n\n\n";

$riel_to_usd = 0.00026;
$kyat_to_usd = 0.00066;
$krones_to_usd = 0.11;
$lek_to_usd = 0.0090;



$converted_riel = $riel * $riel_to_usd ;
$converted_kyat = $kyat * $kyat_to_usd;
$converted_krones = $krones * $krones_to_usd;
$converted_lek = $lek * $lek_to_usd;

echo 
" Converted currencies in dollar : \n
Riel : $converted_riel \n
Kyat : $converted_kyat \n
Krones : $converted_krones \n
Lek : $converted_lek \n\n\n";

$final_amount = $converted_riel + $converted_kyat + $converted_krones + $converted_lek - 4;
echo "\nAfter deducting the transactions fees, you'll be recieving $final_amount usd.";
