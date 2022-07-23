<?php

    function inverse($s){
        return ($s^-1);
    }


    try{
        $s = 0;
        echo $s;
    } catch (Exception $e) {
        echo 'Caught exception', $e->getMessage();
    }
