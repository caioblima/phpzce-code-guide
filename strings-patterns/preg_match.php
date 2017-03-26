<?php
//Regex
//preg_match ( string $pattern , string $subject [, array &$matches [, int $flags = 0 [, int $offset = 0 ]]] )
preg_match('/[^abc]+/', 'abcdefg', $matches);
print_r($matches);