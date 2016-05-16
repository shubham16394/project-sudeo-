<?php
$dom = new DOMDocument();
$host = ‘example.com';
$dom->loadHTMLFile("http://{$host}/");
$xml = simplexml_import_dom($dom);
$links = $xml->xpath('//a[@href]');
foreach ($links as $l) {
    $p = parse_url($l['href']);
    if (empty($p['scheme']) || in_array($p['scheme'], array('http', 'https'))) {
        if (empty($p['host']) || ($host == $p['host'])) {
            echo $l['href'], "<br />\n"; // Handle URL iteration here
        }
    }
}
?>
