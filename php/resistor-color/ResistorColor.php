<?php

declare(strict_types=1);

const COLORS = array(
    'black',
    'brown',
    'red',
    'orange',
    'yellow',
    'green',
    'blue',
    'violet',
    'grey',
    'white'
);

function colorCode(string $color): int
{
    $color = strtolower($color);
    // $colors = array();
    // foreach ( COLORS as $key => $val ) {
    //     $colors[$val] = $key;
    // }
    // return $colors[$color];

    // More clear.
    return array_search($color, COLORS);
}
