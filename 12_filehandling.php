<?php

$file= 'extras/name.txt';

if(file_exists($file)){
    // echo readfile($file);

    $handle = fopen($file , 'r');
    $content = fread($handle, filesize($file));
    echo $content;
} else {
    $handle = fopen($file, 'w');
    $content = 'jeff meme sam yeah';
    $length = 40;
    fwrite($handle, $content, $length);
    fclose($handle);
}