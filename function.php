<?php
// function of php 
function controlEmail ($email) {

    if (str_contains($email, '@') && str_contains($email, '.')) {
        $result = true;
    } else {
        $result = false;
    }

     return  $result;
}

?>