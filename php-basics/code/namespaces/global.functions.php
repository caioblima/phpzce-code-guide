<?php
namespace Custom\Functions;

function encodeData(&$data)
{
	$data = base64_encode(serialize($data));
  return $data;
}

function unencodeData(&$data)
{
  $data = unserialize(base64_decode($data));
  return $data; 
}