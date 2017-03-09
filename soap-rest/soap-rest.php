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
//Call a webservice method as method from SoapClient Class
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