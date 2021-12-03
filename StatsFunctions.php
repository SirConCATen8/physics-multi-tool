<?php
//Formula for finding median
function median($item_arr){
    array_filter($item_arr); //clean array
    sort($item_arr); //sort array in ascending order
    $len=count($item_arr); //get the number of items in array
    $mid=$len/2;
    if($len%2==0){ //even data set requires dividing the sum of two median numbers by 2
        $median=($item_arr[$mid-1]+$item_arr[$mid])/2;
    }
    else{//odd data set requires the number equidistant from min and max to be selected from array
        $median=$item_arr[(int)$mid];
    }
    return $median;
}
//Formula for finding mean
function mean($item_arr){
	array_filter($item_arr);
    $mean = array_sum($item_arr) / count($item_arr);
    return $mean; 
}

//Formula for standard deviation and variance
function st_dev($item_arr){
    array_filter($item_arr); //clean array
    $mean = mean($item_arr); //calculate mean using mean function
    $sum = 0; //define variance variable before loop
    foreach ($item_arr as $item) { 
        $sum += $item;
        $variance += pow(($item-$mean),2); //loop through item_list and build the top half of the variance formula (sum)
    }
    $variance = $variance/count($item_arr); //calculate variance with the bottom half outside the loop
    $st_dev = sqrt($variance); //get standard dev from square root of variance
    return [$mean, $sum, $variance, $st_dev];
}

function z_score($item,$mean,$st_dev){
    $z_score = ($item - $mean)/$st_dev;
    return $z_score;
}

function standard_error_of_mean($item_arr,$st_dev){
    array_filter($item_arr);
    $len=count($item_arr);
    $SEM=($st_dev/sqrt($len));
    return $SEM;
}

function margin_error($SEM,$mean,$z_score){
    $margin=($z_score*$SEM)/$mean;
    return $margin;
}
?>
