<?php
$soapServer = new SoapServer(null, ['uri' => 'http://www.webservicex.com/globalweather.asmx?wsdl']);

class MySoapServiceClass 
{
  public function hello()
  {
    return 'Hello!';
  }
}

$soapServer->setClass('MeuServico');
$soapServer->handle();
print_r($soapServer);

//ini settings
[soap]
; Enables or disables WSDL caching feature.
; http://php.net/soap.wsdl-cache-enabled
soap.wsdl_cache_enabled=1

; Sets the directory name where SOAP extension will put cache files.
; http://php.net/soap.wsdl-cache-dir
soap.wsdl_cache_dir="/tmp"

; (time to live) Sets the number of second while cached file will be used
; instead of original one.
; http://php.net/soap.wsdl-cache-ttl
soap.wsdl_cache_ttl=86400

//http status
https://www.w3.org/Protocols/rfc2616/rfc2616-sec10.html