<?php 
$d = new DOMDocument();
$d->load("DOMparser.xml");
echo $d->saveXML();
$d->save("newfile.doc");
?>

