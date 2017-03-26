<?php
//dom_import_simplexml — Gets a DOMElement object from a SimpleXMLElement object
$myXML = <<<XMLDATA
<zce>
  <basic>
      <code>
        PHP tags, Bitwise
      </code>
  </basic>
</zce>
XMLDATA;
$simpleXMLElement = new SimpleXMLElement($myXML);
$docElement = dom_import_simplexml($simpleXMLElement);
print_r($docElement);exit;