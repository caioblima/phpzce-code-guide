<?php
//Xpath on simplexml - http://php.net/manual/en/simplexmlelement.xpath.php
$text  = '
<library>
  <book id="1">
    <name>PHP</name>
    <description>Learn PHP</description>
  </book>
  <book id="2" class="drão">
    <name>PHP</name>
    <description>Aprenda PHP com o Drão</description>
  </book>
</library>';
$xml  = simplexml_load_string($text);
$element = $xml->xpath("/library/book[contains(@class, 'drão')]");
print_r($element);