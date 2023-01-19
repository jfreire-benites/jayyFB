<?php
header('Access-Control-Allow-Origin: https://jfreire-benites.github.io/jayyFB');
$user = $_POST['name'];
echo ("Hello from server: $user");
?>