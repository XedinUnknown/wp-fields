<?php declare( strict_types=1 );

namespace ChriCo\Fields;

trait ErrorAwareTrait {

	/**
	 * @var array
	 */
	protected $errors = [];

	public function get_errors(): array {

		return $this->errors;
	}

	public function set_errors( array $errors = [] ) {

		$this->errors = $errors;
	}

	public function has_errors(): bool {

		return count( $this->errors ) > 0;
	}

}