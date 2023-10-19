<?php

/*
 * By adding type hints and enabling strict type checking, code can become
 * easier to read, self-documenting and reduce the number of potential bugs.
 * By default, type declarations are non-strict, which means they will attempt
 * to change the original type to match the type specified by the
 * type-declaration.
 *
 * In other words, if you pass a string to a function requiring a float,
 * it will attempt to convert the string value to a float.
 *
 * To enable strict mode, a single declare directive must be placed at the top
 * of the file.
 * This means that the strictness of typing is configured on a per-file basis.
 * This directive not only affects the type declarations of parameters, but also
 * a function's return type.
 *
 * For more info review the Concept on strict type checking in the PHP track
 * <link>.
 *
 * To disable strict typing, comment out the directive below.
 */

declare(strict_types=1);

class Proverb
{
    public function recite(array $words)
    {
        $proverb = array();       
        if (! empty($words)) {
            foreach ($words as $key => $word) {
                $w1 = $words[$key]; 
                if ($key+1 < count($words) ) {
                    $w2 = $words[$key+1];
                    array_push($proverb, "For want of a $w1 the $w2 was lost.");
                } else {
                    array_push($proverb, "And all for the want of a $words[0].");
                }
            };
        }
    
        return $proverb;
        throw new \BadMethodCallException(sprintf('Implement the %s method', __FUNCTION__));
    }
}
