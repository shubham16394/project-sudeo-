<?php
$xml = simplexml_load_file('listing4.xml');

foreach ($xml->address as $address) {
    echo $address->state, "<br \>\n";
}
?>
