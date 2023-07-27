# PHP

## General

### Testing

```
$ phpunit HelloWorldTest.php 
PHPUnit 9.5.2 by Sebastian Bergmann and contributors.

.                                                                   1 / 1 (100%)

Time: 00:00.002, Memory: 4.00 MB

OK (1 test, 1 assertion)
```

### Local workflow
- Donwload the exercise `exercism download --exercise=hello-world --track=php`
- Resolve the exercise.
- Submit the exercise `exercism submit`


## Exercises

### 01-hello-world
### 02-lasagna
`declare(strict_types=1);`

### 03-reverse-string
 - Add UNICODE text to test
 - use:
   - [`mb_str_split`](https://www.php.net/manual/es/function.mb-str-split.php)
   - [`array_reverse`](https://www.php.net/manual/es/function.array-reverse)
   - [`implode`](https://www.php.net/manual/es/function.implode)

### 04-resistor-color
 - use:
   - [`strtolower`](https://www.php.net/manual/es/function.strtolower.php)
   - [`array_search`](https://www.php.net/manual/es/function.array-search.php)
   - [`define() vs const`](https://www.php.net/manual/es/language.constants.syntax.php)
   - [`array_flip`](https://www.php.net/manual/es/function.array-flip.php)

### 05-hamming
 - use:
   - [`str_split`](https://www.php.net/manual/es/function.str-split.php)
   - [`InvalidArgumentException`](https://www.php.net/manual/en/class.invalidargumentexception.php)
   - [`array_diff_assoc`](https://www.php.net/manual/es/function.array-diff-assoc.php)
