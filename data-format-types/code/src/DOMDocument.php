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