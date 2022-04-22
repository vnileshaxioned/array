<?php

$json_val = '{"Title": "The Cuckoos Calling",
"Author": "Robert Galbraith",
"Detail": {
"Publisher": "Little Brown"
}}';

$array = json_decode($json_val, true);

foreach ($array as $key => $val) {
    if ($key != 'Detail') {
        echo $key ." : ". $val . " <br>";
    }
    foreach ($val as $key1 => $val1) {
        echo $key1 ." : ". $val1 . " <br>";
    }
}

?>