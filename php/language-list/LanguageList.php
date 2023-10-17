<?php

/**
 * Define the language_list function that takes no arguments and returns an empty list.
 * 
 * Modify the language_list function, so it takes a variadic argument or string languages. 
 * It should return the resulting list with the languages in the list.
 */
function language_list( ...$languages )
{ 
    return func_get_args();
}

/**
 * Define the add_to_language_list function that takes 2 arguments, an array of languages, and the new language.
 */
function add_to_language_list(array $languages = [], string $new_language = null ) 
{
    array_push($languages, $new_language);
    return $languages;
}

/**
 * Define the prune_language_list function to remove the first language from the array of languages.
 */
 function prune_language_list( array $languages = [] ) {
    array_shift($languages);
    return $languages;
}

/**
 * Define the current_language function that takes 1 argument (a language list). 
 * It should return the first language in the list. Assume the list will always have at least one item.
 */
function current_language( array $languages = [] ) {
    return $languages[0];
}

/**
 * Define the language_list_length function that takes 1 argument (a language list). 
 * It should return the number of languages in the list.
 */
function language_list_length( $languages )
{
    return count($languages);
}