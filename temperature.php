<?php

$temperature = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

for ($i = 0; $i < count($temperature); $i++) {
    $j = $i;
    while ($j > 0 && $temperature[$j] < $temperature[$j-1]) {
        $tmp = $temperature[$j-1];
        $temperature[$j-1] = $temperature[$j];
        $temperature[$j] = $tmp;
        $j--;
    }
}

for ($i = 0; $i < count($temperature); $i++) {
    if ($temperature[$i] != $temperature[$i + 1]) {
        $temp[] = $temperature[$i];
    }
}

foreach ($temp as $key => $val) {
    $temp_sum += $val;
}

$avg_temp = $temp_sum/count($temp);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature</title>
</head>
<body>
    <p>Average Temperature is : <?php echo $avg_temp; ?></p>
    <p>List of five lowest temperatures : <?php
                                                for ($i = 0; $i < 5; $i++) {
                                                    echo  $temp[$i].", ";
                                                }
                                            ?>
    </p>
    <p>List of five highest temperatures : <?php
                                                $len = count($temp) - 5;
                                                for ($i = count($temp); $i >= $len; $i--) {
                                                    echo  $temp[$i].", ";
                                                }   
                                            ?>
    </p>
</body>
</html>