<?php
$no = new DOMDocument();
$myXML = <<<XMLDATA
<zce>
  <basic>
      <code>
        PHP tags, Bitwise
      </code>
  </basic>
</zce>
XMLDATA;
$no->loadXML($myXML);
$convertedToSimpleXML = simplexml_import_dom($no);
print_r($convertedToSimpleXML);exit;