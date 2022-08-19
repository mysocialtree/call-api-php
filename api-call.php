<?php
// url https://mstree.de/api/get.php + ? + api=token
$url = 'https://mstree.de/api/get.php?api=token';

// get data from Server
$contents = file_get_contents($url);


if($contents !== false){

    $character = json_decode($contents);
    echo $character->id; // get data -> "data"

}
?>
