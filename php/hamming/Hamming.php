<?php

declare(strict_types=1);

/**
 * Measure the hamming distance.
 *
 * @param string $strand_a First string.
 * @param string $strand_b Second string.
 * @throws \InvalidArgumentException Exception.
 * @retun int Distance.
 */
function distance( string $strand_a, string $strand_b ): int {

	if ( strlen( $strand_a ) === strlen( $strand_b ) ) {
		$a1 = str_split( $strand_a );
		$a2 = str_split( $strand_b );
		return count( array_diff_assoc( $a1, $a2 ) );
	} else {
		throw new \InvalidArgumentException( 'DNA strands must be of equal length.' );
	}
}
