<?php
//simplexml_import_dom - simplexml_import_dom — Get a SimpleXMLElement object from a DOM node
$no = new DOMDocument();
$meuXml = <<<XMLDATA
<zce>
  <basic>
      <code>
        PHP tags, Bitwise
      </code>
  </basic>
</zce>
XMLDATA;
$no->loadXML($meuXml);
$convertedToSimpleXML = simplexml_import_dom($no);
print_r($convertedToSimpleXML);exit;