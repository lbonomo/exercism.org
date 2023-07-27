#!/usr/bin/env bash


# - You can find links about good style and other resources
#   for Bash in './README.md'. It came with this exercise.
#
#   Example:
#   # other functions here
#   # ...
#   # ...
#
#   main () {
#     # your main function code here
#   }
#
#   # call main with all of the positional arguments
#   
#


main () {
    if [ -z "$1" ]
    then
        p='you'
    else
        p=$1
    fi

    echo "One for $p, one for me."
}

main "$1"
