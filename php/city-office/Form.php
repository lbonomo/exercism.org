<?php


/**
 * 2. Document the types to fill out the form with blank values
 * Add a parameter type and a return type to the blanks method in the Form class. 
 * The method should take in an integer length, and return a string representation of the blank line.
 */

class Form
{
    function blanks(int $length): string
    {
        return str_repeat(" ", $length);
    }

    function letters(string $word): array
    {
        return explode("", $word);
    }

    function checkLength(string $word, int $max_length): bool
    {
        $difference = mb_strlen($word) - $max_length;
        return $difference <= 0;
    }

    function formatAddress(Address $address): string
    {
        $formatted_street = mb_strtoupper($address->street);
        $formatted_postal_code = mb_strtoupper($address->postal_code);
        $formatted_city = mb_strtoupper($address->city);

        return <<<FORMATTED_ADDRESS
            $formatted_street
            $formatted_postal_code $formatted_city
            FORMATTED_ADDRESS;
    }
}
