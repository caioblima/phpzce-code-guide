<?php
$a =     9;
$b =     10;
echo $a & $b;
// place value   128  64  32  16   8  4   2   1
// $a             0   0   0   0    1  0   0   1   =9
// $b             0   0   0   0    1  0  1    0   =10
// result   8  
// only bit they share together is the 8 bit. So 8 gets returned.

$a = 36;
$b = 103;
echo $a & $b;
// place value   128  64  32  16   8    4   2   1
// $a             0   0    1   0   0    1   0   0   =36
// $b             0   1    1   0   0    1   1   1   =103
// result  32+4 = 36
// the only bits these two share together are the bits 32 and 4 which when added together return 36.

$a = 9;
$b = 10;
echo $a | $b;
// place value   128  64  32  16   8  4   2   1
// $a             0   0    0  0    1  0   0   1   =9
// $b             0   0    0  0    1  0   1   0   =10
// result 8+2+1 = 11
// 3 bits set, in the 8, 2, and 1 column.add those up 8+2+1 and you get 11

$a = 9;
$b = 10;
echo $a ^ $b;
// place value   128  64  32  16   8  4   2   1
// $a             0   0   0   0    1  0   0   1   =9
// $b             0   0   0   0    1  0   1   0   =10
// result  2+1 = 3
// the 2 bit and the 1 bit that they each have set but don't share. Soooo 2+1 = 3
// echo 5  & 3;