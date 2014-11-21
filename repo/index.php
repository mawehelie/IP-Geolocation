<?php 

require 'Geo.php';

$geo = new Geo; 


$geo->request();  

echo '<pre>', $geo->ip, '</pre>'; 