
<?php

$marks=95;

if($marks>=80 && $marks<=100){
    echo "you are on Merit";
}
else if($marks>=60 && $marks<=79){
    echo "you are on 1st division";
}
else if($marks>=45 && $marks<=59){
    echo "you are on 2nd division";
}
else if($marks>=33 && $marks<=44){
    echo "you are on 3rd division ";
}
else if($marks>=0 && $marks<=32){
    echo "you are fail";
}
else{
    echo "pls enter valid percentage";
}


?>