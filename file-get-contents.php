/*
* Try to connect to an api for 4 times
* if connects, echo out success message
* else, echo out the number of tries in failed message
*/
$limit  =   0;
$url = 'https://swapi.co/api/planets';
$content = false;

while((!$content or $limit == 0) AND $limit < 4 ) {

    $content = @file_get_contents($url);
    if($limit < 3 and $content) {
        echo 'Congrats. The connection was successful.';
    }
    $limit++;
}
if (!$content) {
    echo "after trying " . $limit . " times, connection failed.";
}