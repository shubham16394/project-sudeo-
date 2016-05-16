<?php
$dom = new DOMDocument();
$dom->loadHTMLFile('http://example.com/');
$xml = simplexml_import_dom($dom);
$links = $xml->xpath('//a[@href]');
foreach ($links as $l) {
    echo $l['href'], "<br />\n";
}
?>
