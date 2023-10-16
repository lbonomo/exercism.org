<?php

/**
 * Position class.
 *
 */
class Position {
    public int $x;
    public int $y;

    function __construct($y, $x)
    {
        $this->x = $x;
        $this->y = $y;
    }
}
