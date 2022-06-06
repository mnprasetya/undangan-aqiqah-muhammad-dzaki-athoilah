<?php


$baseurl = "https:/mpdev.my.id";

$data = file_get_contents('data/data.json');
$json = json_decode($data, true);

// read data
date_default_timezone_set('Asia/Jakarta');
$file = "data/ucapan.json";
$ucapan = file_get_contents($file);
$dataucapan = json_decode($ucapan, true);
