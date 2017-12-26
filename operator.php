<?php
//====================================Binary operator==================================
$x=20;
$y=5;
echo "addition:$x+$y=".($x+$y);
echo "<br/>";
echo "subtraction:$x-$y=".($x-$y);
echo "<br/>";
echo "multiplication:$x*$y=".($x*$y);
echo "<br/>";
echo "division:$x/$y=".($x/$y);
echo "<br/>";
echo "modules:$x%$y=".($x%$y);
echo "<br/>";
echo "<br/>";

//==================================Unary operator=======================================

echo "X is=".$x++;
echo "<br/>";
echo "Increase plusplus Number of X=".$x;
echo "<br/>";
echo "Y is=".$y--;
echo "<br/>";
echo "Decrease minusminus Number of Y=".$y;
echo "<br/>";
echo "<br/>";

//======================================Assignment Operator==========================================
echo "Plus equal Number of  X=".$x+=2;
echo "<br/>";
echo "Minus equal Number of  Y=".$y-=2;
echo "<br/>";
echo "Multiply equal number of  X=".$x*=2;
echo "<br/>";
echo "Divide equal number of  Y=".$y/=2;
echo "<br/>";
echo "Module equal number of  X=".$x%=2;
echo "<br/>";
//echo "Concatenate equal number XY=".$x.=$y;================Problem
echo "<br/>";
echo "<br/>";

// ==========================================Conditional Operator==========================================
if ($x==$y){
    echo "True";
} else{
    echo "False";
}
echo "<br/>";
if ($x!=$y){
    echo "True";
} else{
    echo "False";
}
echo "<br/>";
if ($x<$y){
    echo "True";
} else{
    echo "False";
}
echo "<br/>";
if ($x>$y){
    echo "True";
} else{
    echo "False";
}
echo "<br/>";
if ($x<=$y){
    echo "True";
} else{
    echo "False";
}
echo "<br/>";
if ($x>=$y){
    echo "True";
} else{
    echo "False";
}
echo "<br/>";
if ($x===$y){
    echo "True";
} else{
    echo "False";
}
echo "<br/>";
if ($x!==$y){
    echo "True";
} else{
    echo "False";
}
echo "<br/>";
echo "<br/>";
//======================================Logical Operator=============================

if (($x<2)&&($y>0)){
    echo"True";
} else{
    echo "False";
}
echo "<br/>";
if (($x<2)||($y<0)){
    echo"True";
} else{
    echo "False";
}
echo "<br/>";
if (($x<2)!=($y<0)){
    echo"True";
} else{
    echo "False";
}
echo "<br/>";





