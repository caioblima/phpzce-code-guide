<?php
//Ternary:
$queryParamsArray = (isset($_GET['q'])) ? explode('&', $_GET['q']) : false;
print_r($queryParamsArray);