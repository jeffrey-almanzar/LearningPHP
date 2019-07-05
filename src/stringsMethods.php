<?php
$s = " Hi Jeff you're mastering PHP  ";
//removing spaces from start and end
$s = trim($s);
$s .="\n";
echo $s;

//cases
echo strtolower($s);
echo strtoupper($s);

//title
echo ucwords($s);

//length
echo strlen($s);
echo "\n";

//substring
echo substr($s, 0,10) . "\n";

//replacing
echo str_replace("Jeff","Isma", $s) ."\n";

?>