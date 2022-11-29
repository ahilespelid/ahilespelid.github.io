<?php 
if(!function_exists('pa')){
    function pa($a,$br=0,$t='pre'):bool{$backtrace = debug_backtrace(); $fileinfo = '';$sbr='';
        if(!empty($backtrace[0]) && is_array($backtrace[0])){$fileinfo = $backtrace[0]['file'] . ":" . $backtrace[0]['line'];}
        while($br){$sbr.='<br>';$br--;}
        echo $fileinfo.$sbr.'<'.$t.'>'; print_r($a=(!empty($a)?$a:[])); echo'</'.$t.'>';
        return true;
}}