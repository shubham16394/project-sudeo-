<?php
// Store some basic information we will need to reference
$apiurl = 'http://api.flickr.com/services/rest/?';
$key = '9f275087e222ee395c92662437bf84a2'; // Replace with your own key

// Build an array of parameters we want to request:
$params = array(
    'method' => 'flickr.photos.search',
    'api_key' => $key,
    'text' => 'crossbow', // Our search term
    'media' => 'photos',
    'per_page' => 20 // We only want 20 results
);

// Now make the request to flickr:
$xml = simplexml_load_file($apiurl . http_build_query($params));

// From this, iterate over the list of photos & request more info:
foreach ($xml->photos->photo as $photo) {
    // Build a new request with this photo's ID
    $params = array(
        'method' => 'flickr.photos.getInfo',
        'api_key' => $key,
        'photo_id' => (string)$photo['id']
    );
    $info = simplexml_load_file($apiurl . http_build_query($params));
    
    // Now $info holds a vast amount of data about the image including
    //  owner, GPS, dates, description, tags, etc … all to be used.

    // Let's also request 'sizes' to get all of the image URLs:
    $params = array(
        'method' => 'flickr.photos.getSizes',
        'api_key' => $key,
        'photo_id' => (string)$photo['id']
    );
    $sizes = simplexml_load_file($apiurl . http_build_query($params));
    $small = $sizes->xpath("//size[@label='Small']");
    
    // For now, just going to create a simple display of the image,
    //  linked back to Flickr, with title, GPS info, and more shown:

    // See if Location information was available:
    $location = '';
    if (!empty($info->photo->location->locality)) {
        $location = <<<EOLOCATION
        <li>Location: {$info->photo->location->locality}, 
            {$info->photo->location->county},
            {$info->photo->location->region}, 
            {$info->photo->location->country}
        </li>
EOLOCATION;
    }

    // Echo out the final HTML
    echo <<<EOHTML
<div>
  <a href="{$info->photo->urls->url[0]}">
    <img src="{$small[0]['source']}"
         width="{$small[0]['width']}" 
         height="{$small[0]['height']}" />
  </a>
  <ul>
    <li>Title: {$info->photo->title}</li>
    <li>
        User: {$info->photo->owner['realname']}
        ({$info->photo->owner['username']})
    </li>
    <li>Date Taken: {$info->photo->dates['taken']}</li>
    {$location}
  </ul>
</div>
EOHTML;
}
?>
