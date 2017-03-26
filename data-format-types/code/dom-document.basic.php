<?php
//Dom Document - http://php.net/manual/en/book.dom.php
//Carregando um arquivo xml
$load = new DOMDocument();
$load->load('/path/to/archives/my.xml');
//Carregando html por string
$loadHtml = new DOMDocument();
$loadHtml->loadHTML('<html><p>Hello</p><br></html>');
print_r($loadHtml->documentElement);
//Carregando arquivo html
$loadHtmlFile = new DOMDocument();
$loadHtmlFile->loadHTMLFile('/path/to/archives/my.html');
//Carregando xml por string
$loadString = new DOMDocument();
$loadString->loadXML('<root><name>PHP</name></root>');
print_r($loadString->getElementsByTagName('name')->item(0));