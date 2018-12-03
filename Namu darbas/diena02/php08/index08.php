
<?php
    $temp = array(4, 3, 9, 19, 19, 9, 12, 20, 24, 20, 12, 14, 18, 21, 20, 23, 16, 16, 15, 19, 19, 17, 17, 15, 12, 13, 13, 15, 19, 21);

    rsort($temp);

    $visaTemp = 0;
    foreach($temp as $t){
    	$visaTemp += $t;
    	echo $t, ", ";
    }
    echo "<br/>";

    $vid = $visaTemp / sizeof($temp);
    echo "Vidutine temperatura: ", round($vid), "<br/>";

    $silc = array_slice($temp, 0, 5);
    echo "Silciausios temperaturos: ";
    foreach($silc as $t){
    	echo $t, ", ";
    }
    echo "<br/>";

    $salc = array_slice($temp, sizeof($temp) - 5);
    echo "Salciausios temperaturos: ";
    foreach($salc as $t){
    	echo $t, ", ";
    }
    echo "<br/>";
    ?>
