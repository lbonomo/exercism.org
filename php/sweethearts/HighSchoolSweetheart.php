<?php
/**
 * High School Sweetheart ACSII art.
 *
 *  @package sweethearts
 */

declare(strict_types=1);

/**
 * HighSchoolSweetheart Class.
 */
class HighSchoolSweetheart {
	/**
	 * Return first leter of name.
	 *
	 * @param string $name Name.
	 * @return string First leter.
	 */
	public function firstLetter( string $name ): string {
		return substr( $name, 0, 1 );
	}

	/**
	 * Return initial of name.
	 *
	 * @param string $name Name.
	 * @return string Initial.
	 */
	public function initial( string $name ): string {
		return strtoupper( substr( $name, 0, 1 ) ) . '.';
	}

	/**
	 * Return initial of name.
	 *
	 * @param string $name Name.
	 * @return string Initials.
	 */
	public function initials( string $name ): string {
		$names    = explode( ' ', $name );
		$initials = array();
		foreach ( $names as $name ) {
			array_push( $initials, $this->initial( $name ) );
		}
		return implode( ' ', $initials );
	}

	/**
	 * Return initial of name.
	 *
	 * @param string $sweetheart_a Name.
	 * @param string $sweetheart_b Name.
	 * @return string Both initials.
	 */
	public function pair( string $sweetheart_a, string $sweetheart_b ): string {
		$the_two_lovers = $this->initials( $sweetheart_a ) . '  +  ' . $this->initials( $sweetheart_b );
		$sweetheart     = "     ******       ******
   **      **   **      **
 **         ** **         **
**            *            **
**                         **
**     $the_two_lovers     **
 **                       **
   **                   **
     **               **
       **           **
         **       **
           **   **
             ***
              *";
		return $sweetheart;
	}
}
