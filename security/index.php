<?php
declare(strict_types=1);
// https://www.owasp.org/index.php/Testing_for_Remote_File_Inclusion
// https://secure.php.net/manual/pt_BR/filesystem.configuration.php
// https://secure.php.net/manual/pt_BR/ini.php
// https://secure.php.net/manual/pt_BR/ini.list.php
// https://secure.php.net/manual/pt_BR/ini.sections.php
// http://php.net/manual/pt_BR/errorfunc.constants.php
// PHP INI confs
// allow_url_fopen = Off
// allow_url_include = Off
// max_execution_time = 30
// max_input_time = 60
$input_data = file_get_contents('php://input');
$data = [];
parse_str($input_data, $data);
print_r($data);