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