<?php

function check_verity($code, $id=''){
    $verity =  new \Think\Verify(); 
    return $verity->check($code, $id);
}