<?php
namespace Caio\Classes;
require_once './global.functions.php';
use function Custom\Functions\encodeData as encodeData;
use function Custom\Functions\unencodeData as unencodeData;

final class GenericAbstractions
{
  final public static function sumValues($val1, $val2) 
  {
    return $val1 + $val2;
  }

  final public static function protectArray(&$array) 
  {
    return encodeData($array);
  }

  final public static function unprotectArray(&$array) 
  {
    return unencodeData($array);
  }
}