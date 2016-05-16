<?php
$dom = new DOMDocument();
$dom->loadHTMLFile('http://example.com/');
$xml = simplexml_import_dom($dom);
?>
