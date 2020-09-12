<?php
$http = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . "public";
header('Location: ' . $http);
