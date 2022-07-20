<?php
//=== identical to. implies are similar in value and type

$t = date("D");

if (2>1){
        print $t;
}

$col = 'red';
switch($col){
    case 'red':
        echo 'tis red';
        break;
    case 'blue':
        echo 'bluee';
        break;
    case 'green':
        echo 'is grin';
        break;
    default:
        echo 'not found';
}