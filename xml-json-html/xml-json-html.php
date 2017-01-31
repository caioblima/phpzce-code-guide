<?php
//XML
//simple xml load string - http://php.net/manual/pt_BR/libxml.constants.php
//  simplexml_load_file segue as mesmas regras da string a diferenca é quye uma carrega de string e outra carrega por arquivo
// class MeuSimplesXml extends SimpleXMLElement  {}
// $meuXML = '<root/>';
// $xml = simplexml_load_string($meuXML,  'MeuSimplesXml', LIBXML_VERSION, 'namespace');
// print_r($xml);

//Class SimpleXMLEelement
$meuXml = <<<XMLDATA
<zce>
  <basico>
      <sintaxe>
        PHP tags, Bitwise
      </sintaxe>
  </basico>
</zce>
XMLDATA;
$meuXml  = new SimpleXMLElement($meuXml);
print_r($meuXml);
//http://php.net/manual/en/refs.xml.php

//Dom Document - http://php.net/manual/en/book.dom.php
