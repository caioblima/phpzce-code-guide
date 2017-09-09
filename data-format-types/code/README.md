
# DateTime:
```php
<?php
$today = new DateTime('now');
$tomorrow = $today->add(new DateInterval('P1D'));
print_r($today);

$birthday = new DateTime('1993-07-02');
$birthday->setDate(1993,  7,  2);
print_r($birthday->format('d/m/Y'));

$saoPaulo = new DateTime('now', new DateTimeZone('America/Sao_Paulo'));
print $saoPaulo->format('d/m/Y  H:m:s');

$auckland = new DateTime('now', new DateTimeZone('Pacific/Auckland'));
print_r($auckland->getTimezone()->getName()); 
echo PHP_EOL;
print $auckland->format('d/m/Y  H:m:s');

$datimeFormat = DateTime::createFromFormat('d/m/Y',  '02/07/1993');
print $datimeFormat->format('Y-m-d'); //  1993-07-02
```

# DateTimeImmutable:
```php
<?php
$today = new DateTimeImmutable('now');
$tomorrow = $today->add(new DateInterval('P1D'));
print_r($tomorrow);

$today = new DateTimeImmutable('now');
$yesterday  = $today->sub(new  DateInterval('P2D'));
print $yesterday->format('Y-m-d');  //2015-10-09

$today = new DateTimeImmutable('now');
print_r($today->getTimezone()->getName());
$newdate = $today->modify('+ 1 year');
print $newdate->format('Y-m-d');  //2015-10-09
```

# dom_import_simplexml:
```php
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
$simpleXMLElement = new SimpleXMLElement($myXML);
$docElement = dom_import_simplexml($simpleXMLElement);
print_r($docElement);
```

# DOMDocument:
```php
<?php
$load = new DOMDocument();
$load->load('/path/to/archives/my.xml');

$loadHtml = new DOMDocument();
$loadHtml->loadHTML('<html><p>Hello</p><br></html>');
print_r($loadHtml->documentElement);

$loadHtmlFile = new DOMDocument();
$loadHtmlFile->loadHTMLFile('/path/to/archives/my.html');

$loadString = new DOMDocument();
$loadString->loadXML('<root><name>PHP</name></root>');
print_r($loadString->getElementsByTagName('name')->item(0));
```

# DomDocument::DomXpath:
```php
<?php
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
```

# GenericExamples:
```php
<?php
/* DateInterval class - iso 8600 designator https://en.wikipedia.org/wiki/ISO_8601#Durations */
print_r(date('j/n/Y', strtotime('+1 month')));
/* P1Y1MT10H */
```

# json_decode:
```php
<?php
print_r(json_decode('{"zcpe":{"a":"basico \u003C\u003E \u0022","b":"avancado","c":{"drao":"monster","zica":"do pantano"}}}', false));
```

# json_encode:
```php
<?php
class test {
    public $a = 1;
    public $b = 2;
    public $c = 3;
    const AE = 4;
}
$jsonTest = new test;
print json_encode($jsonTest);
echo PHP_EOL;
print json_encode([
    'zcpe'  =>  [
        'a' => 'basic <> "',
        'b' => 'advanced',
        'c' => ['drao' => 'monster', 'someKey' => 'someValue'],
        'd' => ['malanderssan', 'from the objects', 'a' => ['1']]
    ]
], JSON_HEX_QUOT | JSON_HEX_TAG, 4);
```

# simplexml_import_dom:
```php
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
```

# simplexml_load_string:
```php
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
```

# SimpleXMLElement:
```php
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

```

# SimpleXMLElement::xpath:
```php
<?php
$text  = '
<library>
    <book id="1">
        <name>PHP</name>
        <description>Learn PHP</description>
    </book>
    <book id="2" class="teacher">
        <name>PHP</name>
        <description>Learn PHP with the teacher</description>
    </book>
</library>';
$xml  = simplexml_load_string($text);
$element = $xml->xpath("/library/book[contains(@class, 'teacher')]");
print_r($element);
```

# SoapClient:
```php
<?php
//SoapClient - detalhes em http://php.net/manual/pt_BR/class.soapclient.php
//Call an external webservice, wsdl = web service description language
$params = ['user' => 'drao', 'pass' => 'draopass', 'trace' => 1, 'wsdl_cache' => WSDL_CACHE_MEMORY];
$client = new SoapClient('http://serviceendpoing.net?wsdl', $params);
//List webservice methods
$client->__getFunctions();
//Call a webservice method as an SoapObject Method
$methodParams = ['someData'];
$client->doSomething($methodParams);
//Call a webservice method as a method from SoapClient Class
$result = $client->__soapCall("doSomething", $methodParams, ['uri' => 'alternate-uri'], $soapHeaders = null, $output_headers);
//If trace is true get returned response
$result = $client->getLastResponse();
//If your client needs soap header specific params
$optionsObj = new stdClass();
$optionsObj->SystemId = "DATA";
$optionsObj->UserName = "USERNAME";
$optionsObj->Password = "PASSWORD";
$soapHeaders = new SoapHeader('AuthHeaderNameSpace','AuthHeader',$optionsObj);
$result = $client->__soapCall("doSomething", $methodParams, ['uri' => 'alternate-uri'], $soapHeaders, $output_headers);
```
