<?php
class MySimpleXML extends SimpleXMLElement  {}

$myXML = <<<XMLDATA
<zce>
  <basic>
      <syntax>
        PHP tags, Bitwise
      </syntax>
  </basic>
</zce>
XMLDATA;

$xml = simplexml_load_string($myXML,  'MySimpleXML', LIBXML_VERSION, 'namespace');
$xml = simplexml_load_string($myXML);
print_r($xml);