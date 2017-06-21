<?php
declare(strict_types=1);
// https://www.owasp.org/index.php/Testing_for_Remote_File_Inclusion
// https://secure.php.net/manual/pt_BR/filesystem.configuration.php
// https://secure.php.net/manual/pt_BR/ini.php
// https://secure.php.net/manual/pt_BR/ini.list.php
// https://secure.php.net/manual/pt_BR/ini.sections.php
// http://php.net/manual/pt_BR/errorfunc.constants.php
// https://www.owasp.org/index.php/Cryptographic_Storage_Cheat_Sheet#Providing_Cryptographic_Functionality
// http://php.net/manual/en/ref.password.php
// http://php.net/manual/en/faq.passwords.php#faq.passwords.fasthash
// http://php.net/manual/pt_BR/book.openssl.php
// http://php.net/manual/pt_BR/function.session-cache-expire.php
// http://php.net/manual/pt_BR/language.variables.superglobals.php
// http://php.net/manual/en/reserved.variables.server.php
// https://secure.php.net/manual/pt_BR/book.filter.php
// http://php.net/manual/en/filter.constants.php
// http://php.net/manual/en/function.random-bytes.php
// PHP INI confs
// allow_url_fopen = Off
// allow_url_include = Off
// max_execution_time = 30
// max_input_time = 60
// $input_data = file_get_contents('php://input');
// $data = [];
// parse_str($input_data, $data);
// print_r($data);

// $text = 'PHP ZCE Certification';
// $zceMd5 = md5($text. true);
// print_r($zceMd5);exit;
// var_dump($zceMd5 === md5($text));
// $passInput = 'myPass';
// $passwordHash = password_hash($passInput, PASSWORD_DEFAULT);
// if (password_verify($passInput, $passwordHash)) {
//   echo 'Password ok';
// } else {
//   echo 'Password not ok';
// }
// print_r($passwordHash);exit;

// $actualSessionExpire = session_cache_expire();
// echo "Actual expire session: $actualSessionExpire";
// echo PHP_EOL;
// session_cache_expire(10);
// $actualSessionExpire = session_cache_expire();
// print_r($actualSessionExpire);

// session_start();
// $_SESSION['userData'] = [
//   'data1' => 'value1',
//   'data2' => 'value2',
// ];
// print_r($_SESSION);

// print_r($_SERVER);

// $offset  = filter_input(INPUT_GET, 'pagina', FILTER_SANITIZE_SPECIAL_CHARS);

// $email        = "michaeldouglas010790.com";
// $emailFilter  = filter_var($email,  FILTER_VALIDATE_EMAIL);
// var_dump($emailFilter);

// $int = '1';
// $intFilter = filter_var($int, FILTER_VALIDATE_INT);
// var_dump($intFilter);

// hash functions
// md5
// sha1
// password_*

print CRYPT_SALT_LENGTH;