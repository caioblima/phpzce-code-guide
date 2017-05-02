<?php
$data = file_get_contents('php://input');
print_r($data);

//curl -X PUT -H "Content-Type: application/x-www-form-urlencoded" -d 'meu_parametro=meu_valor' http://localhost.phpzce/data-format-types/code/soap-rest/rest.php

//http status code
//http GET, POST, PUT, PATCH, DELETE