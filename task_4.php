<?php

$a1 = array('c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', 'c4' => 'Black');
$a2 = array('c2', 'c4');

foreach ($a1 as $a1_key => $a1_val) {
    foreach ($a2 as $a2_key => $a2_val) {
        if ($a1_key == $a2_val) {
            $output[$a2_val] = $a1_val;
        }
    }
}

echo "<pre>";
print_r($output);

?>