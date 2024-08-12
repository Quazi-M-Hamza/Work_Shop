<?php 
$xml=new DOMDocument;
$xml->load("internal.xml");
if($xml->validate() ){
echo"It is a valid XML Document";
}
else{
echo "error:it is an invalid xml";}
?>