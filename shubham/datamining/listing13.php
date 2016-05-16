<ul>
<?php
$xml = simplexml_load_file('http://feeds.nytimes.com/nyt/rss/HomePage');
foreach ($xml->channel->item as $item) {
    echo "<li><a href=\"{$item->link}\">{$item->title}</a></li>";
}
?>
</ul>
