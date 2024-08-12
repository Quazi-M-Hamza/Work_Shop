<?php
$xml = simplexml_load_file("SAXParser.xml");
echo "<table border=2>";
echo "<tr><th>Book Name</th>
<th>Author</th><th>Price</th></tr>"; 

foreach ($xml->book as $v) { 
    echo "<tr>";
    echo "<td>" . $v->bookname . "</td>"; 
    echo "<td>" . $v->author . "</td>";  
    echo "<td>" . $v->price . "</td>";   
    echo "</tr>";
}

echo "</table>";
?>