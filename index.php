<?php
$xml = file_get_contents('../dpimport/jc.xml');
$p = xml_parser_create('');
xml_parse_into_struct($p, $simple, $vals, $index);
xml_parser_free($p);
echo "Index array\n";
print_r($index);
echo "\nVals array\n";
print_r($vals);
