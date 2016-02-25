<?php

/**
 * Class Transmission
 */
class Transmission
{
	/**
	 * @var $type The transmission type.
	 */
	private $type;

	/**
	 * Transmission constructor.
	 *
	 * @param string $type   The transmission type.
	 */
	public function __construct($type)
	{
		$this->type = $type;
	}
}