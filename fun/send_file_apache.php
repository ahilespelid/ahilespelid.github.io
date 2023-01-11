<?php 
if(!function_exists('send_file_apache')){
function send_file_apache($file) {
  if(file_exists($file)){
    header('X-SendFile: '.realpath($file));
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.basename($file));
    exit;
  }
}}
?>