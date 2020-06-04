<?php
$data=file_get_contents('https://api.covid19api.com/');
$coronadata=json_decode($data);
?>