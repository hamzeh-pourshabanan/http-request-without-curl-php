<?php
/*
* Try to connect to an api for 4 times
* if connects, echo out success message
* else, echo out the number of tries in failed message
*/
$limit  =   0;
$url = 'https://swapi.co/api/planets';
$content = false;

while(!$content AND $limit < 4 ) { // If content is not null or $limit exceeds 4, end the loop

    // Make sure to suppress the warning by putting an error control operator (@) in front of the call to file_get_contents()
    $content = @file_get_contents($url);
    if($content) {
        echo 'Congrats. The connection was successful.';
    }
    $limit++;
}
if (!$content) {
    echo "after trying " . $limit . " times, connection failed.";
}
