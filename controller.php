<?php
    $gene=$_GET["gene"];

    $xmlDoc = new DOMDocument();
    $xmlDoc->load("connection.xml");
    
    $x=$xmlDoc->getElementsByTagName('TRUST');
    
    for ($i=0; $i<=$x->length-1; $i++) {
      //Process only element nodes
      if ($x->item($i)->nodeType==1) {
        if ($x->item($i)->childNodes->item(0)->nodeValue == $gene) {
          $y=($x->item($i)->parentNode);
        }
      }
    }
?>
