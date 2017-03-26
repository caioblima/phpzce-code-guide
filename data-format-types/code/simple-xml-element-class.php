<?php
//Class SimpleXMLEelement - http://php.net/manual/en/class.simplexmlelement.php
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
