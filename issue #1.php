<?php
//Даны два натуральных числа. Найти то, которое отличается не более чем на 20.
$a=3;
$b=3;
$c=$a-$b;
if (($c>20) or ($c<-20))
    echo ("Число " . $a . "больше/меньше  числа " . $b);
else if ((($c>-20) or ($c<20)) and ($a!=$b))
    echo ("Числа не отличаются на 20 или более");

if ($c==0)
    echo ("Числа равны");
