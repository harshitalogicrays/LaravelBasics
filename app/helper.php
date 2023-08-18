<?php
// important functions 

// echo "Welcome";

if(!function_exists('printdata')){
    function printdata($data){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}


if(!function_exists('formattedDate')){
        function formattedDate($d){
            return(date('D d-M-Y',strtotime($d)));
        }
}