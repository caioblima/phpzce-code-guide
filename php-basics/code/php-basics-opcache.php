<?php
// http://php.net/manual/pt_BR/opcache.configuration.php
print_r(opcache_get_status()); echo PHP_EOL;
print_r(opcache_get_configuration());
opcache_reset();
opcache_compile_file('meu_arquivo.php');