<?php

/**
 * Main class.
 */
class AnnalynsInfiltration {

	public function canFastAttack( $is_knight_awake ) { // phpcs:ignore
		if ( $is_knight_awake ) {
			return false;
		} else {
			return true;
		}
		throw new \BadFunctionCallException( 'Implement the function' );
	}

	public function canSpy( // phpcs:ignore
		$is_knight_awake,
		$is_archer_awake,
		$is_prisoner_awake
	) {
		if ( $is_knight_awake || $is_archer_awake || $is_prisoner_awake ) {
			return true;
		} else {
			return false;
		}
		throw new \BadFunctionCallException( 'Implement the function' );
	}

	public function canSignal( // phpcs:ignore
		$is_archer_awake,
		$is_prisoner_awake
	) {
		if ( ! $is_archer_awake && $is_prisoner_awake ) {
			return true;
		} else {
			return false;
		}
		throw new \BadFunctionCallException( 'Implement the function' );
	}

	public function canLiberate( // phpcs:ignore
		$is_knight_awake,
		$is_archer_awake,
		$is_prisoner_awake,
		$is_dog_present
	) {
		if ( $is_dog_present ) {
			if ( $is_archer_awake ) {
				return false;
			} else {
				return true;
			}
		} elseif ( $is_prisoner_awake ) {
			if ( $is_knight_awake || $is_archer_awake ) {
				return false;
			} else {
				return true;
			}
		} else {
			return false;
		}

		throw new \BadFunctionCallException( 'Implement the function' );
	}
}
