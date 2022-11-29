<?php 
if(!function_exists('is_date')){
    function is_date($value):?object{
        if(!$value){return false;}
        try{$d = (new \DateTime($value)); return $d;}catch(\Exception $e){return null;}
}}