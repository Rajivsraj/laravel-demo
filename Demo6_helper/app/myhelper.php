<?php


if(!function_exists("capital")){
    function capital($data){
        return strtoupper($data);
        
    }
}

if(!function_exists("pre_data")){
    function pre_data($data){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}

?>