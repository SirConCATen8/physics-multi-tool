<?php

//Classic formula for determining velocity
function velocity_classic($distance, $time){
    $unit = "m/s";
    $velocity = $distance/$time;
    return $velocity;
}

//Classic formula for determining acceleration
function acceleration_classic($velocity_delta, $time){
    $unit = "m/s<sup>2</sup>";
    $acceleration = $velocity_delta/$time;
    return $acceleration;
}

//Classic formula for determining density
function density_classic($mass,$volume){
    $unit = "g/L";
    $density = $mass/$volume;
    return $density;
}

//Classic formula for determining force
function force_classic($mass, $acceleration){
    $unit = "N";
    $force = $mass*$acceleration;
    return $force;
}

function work_classic($force, $distance){
    $unit = "J";
    $work = $force*$distance;
    return $work;
}

?>
