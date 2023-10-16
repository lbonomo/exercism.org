<?php

/**
 * Size class.
 *
 */
class Size {
    public int $height = 600;
    public int $width = 800;

    function __construct($height, $width)
    {
        $this->width  = $width;
        $this->height = $height;
    }
}
