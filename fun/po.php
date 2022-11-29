<?php 
if(!function_exists('po')){
    function po($t):string{echo $ret = mb_ord($t,"UTF-8")."<br>"; return $ret;}
}