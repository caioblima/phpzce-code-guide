<?php
$myXML = <<<XMLDATA
<zce>
  <basic>
      <code>
        PHP tags, Bitwise
      </code>
  </basic>
</zce>
XMLDATA;

$myXML  = new SimpleXMLElement($meuXml);
$myXML->addChild('newElementKey', 'newElementVal');
print_r($myXML);
