<?php
/**
 * Pizza Pi Class file.
 *
 *  @package pizza-pi
 */

declare(strict_types=1);

/**
 * PizzaPi Class.
 */
class PizzaPi {

	public const DOUGH_FOR_PERSON = 20;
	public const DOUGH_FOR_MIDDLE = 200;
	public const SAUCE_FOR_PIZZA  = 125;
	public const SLICES_OF_PIZZA  = 8;

	/**
	 * Calculate dough requirement.
	 *
	 * @param int $pizzas number of pizzas.
	 * @param int $persons number of persons each pizza will serve.
	 * @return int Grams.
	 */
	public function calculateDoughRequirement( int $pizzas, int $persons, ): int {
		$grams = $pizzas * ( ( $persons * self::DOUGH_FOR_PERSON ) + self::DOUGH_FOR_MIDDLE );
		return $grams;
	}

	/**
	 * Calculate sauce requirement.
	 *
	 * @param int $pizzas number of pizzas.
	 * @param int $sauce Sauce in a cans.
	 * @return int Cans of sauce.
	 */
	public function calculateSauceRequirement( int $pizzas, int $sauce ): int {
		$cans = ( $pizzas * self::SAUCE_FOR_PIZZA ) / $sauce;
		return $cans;
	}

	/**
	 * Calculate cheese cube coverage.
	 *
	 * @param int   $cheese_side Side length Dimension of a cheese cube.
	 * @param float $cheese_thickness Thickness of the cheese layer.
	 * @param int   $diameter The diameter of the pizza.
	 * @return int  Pizzas.
	 */
	public function calculateCheeseCubeCoverage(
		int $cheese_side,
		float $cheese_thickness,
		int $diameter ): int {
			$pizzas = intval( floor( ( $cheese_side ** 3 ) / ( $cheese_thickness * pi() * $diameter ) ) );
			return $pizzas;
	}

	/**
	 * Calculate left over slices.
	 *
	 * @param int $pizzas Number of pizzas.
	 * @param int $friends number of friends.
	 * @return int Number of slices that will be *left over*.
	 */
	public function calculateLeftOverSlices( int $pizzas, int $friends ): int {
		$left = ( $pizzas * self::SLICES_OF_PIZZA ) % $friends;
		return $left;
	}
}
