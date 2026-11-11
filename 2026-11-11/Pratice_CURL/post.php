<?php 

$id = $_GET['id'];

$ch = curl_init("https://jsonplaceholder.typicode.com/posts?id=$id");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$rs = curl_exec($ch);

die($rs);

