<?php
//DomXpath - http://php.net/manual/en/domxpath.construct.php
$xml = '
<library>
  <book id="1">
    <name>PHP</name>
    <description>Learn PHP</description>
  </book>
  <book id="drao">
    <name>Drão</name>
    <description>Learn PHP with Drão</description>
  </book>
</library>';
$document  = new DOMDocument();
$document->loadXML($xml);
$xpath  = new DOMXpath($document);
$elementsGenericSearch = $xpath->query("//book");
// Multiplos elementos
if ($elementsGenericSearch->length) {
  foreach ($elementsGenericSearch as $element) {
    print_r($element); echo PHP_EOL;
  }
}
$elementsSpecific = $xpath->query("//book[contains(@id, 'drao')]");
// single ou indexed elements
if ($elementsSpecific->item(0)) {
  $element = $elementsSpecific->item(0);
  print_r($element);
}
//More Examples
$xml  = '
<library>
  <bookcase id="draophp">
    <book id="1">
      <nome>PHP</nome>
      <descricao>Learn PHP</descricao>
    </book>
    <book id="2">
      <nome>Zend  framework</nome>
      <descricao>Learn Zend Framework</descricao>
    </book>
  </bookcase>
  <bookcase id="D1">
    <book id="5">
      <nome>Bitwise</nome>
      <descricao>Ninja Bitwise Manipulation</descricao>
    </book>
  </bookcase>
</library>';
$document  = new DOMDocument();
$document->loadXML($xml);
$xpath  = new DOMXpath($document);
// Get all elements name book
$element = $xpath->query('//book');
// Get books on the boocase draophp
$books = $xpath->query('//library/bookcase[@id="draophp"]//book');
print_r($books);
foreach ($books as $element) {
  print_r($element);
}