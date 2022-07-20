<?php

function registerUser($email){
    echo $email . ' is registered' ;
}

registerUser('George');

//anonymous functions

$sub = function($n1, $n2){
    return $n1-$n2;
};

echo $sub(18, 9);

//Arrow fn

$sub = fn($n1, $n2) => $n1-$n2;

echo $sub (100, 123);