<?php
// As merge function also copies duplicate value and doest not Sort the order. We are creating such one that I have implemented in my project. 
function merge_array($arr1,$arr2){

    $arr3 = array_merge($arr1,$arr2);
    sort($arr3,1);
    array_unique($arr3);
    return $arr3;
}
