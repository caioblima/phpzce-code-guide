<?php
// sprintf
$money1 = 68.75;
$money2 = 54.35;
$money = $money1 + $money2;
$formatted = sprintf("%.2f", $money);
echo $formatted;