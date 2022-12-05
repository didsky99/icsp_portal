<?php
// round_up:
// rounds up a float to a specified number of decimal places
// (basically acts like ceil() but allows for decimal places)
function round_up ($value, $places=0) {
    if ($places < 0) { $places = 0; }
    $mult = pow(10, $places);
    return ceil($value * $mult) / $mult;
}

// round_out:
// rounds a float away from zero to a specified number of decimal places
function round_out ($value, $places=0) {
    if ($places < 0) { $places = 0; }
    $mult = pow(10, $places);
    return ($value >= 0 ? ceil($value * $mult):floor($value * $mult)) / $mult;
}

?>