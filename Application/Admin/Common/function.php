<?php

function check_verity($code, $id=''){
    $verity =  new \Think\Verify(); 
    return $verity->check($code, $id);
}

function getschedule(){
    $file = "/tmp/schedule.dat";
    $result = file_get_contents($file);
    return preg_replace('/\s/', '', substr($result, 5));
}