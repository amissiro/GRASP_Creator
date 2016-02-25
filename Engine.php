<?php

/**
 * Class Engine
 */
class Engine
{
	/**
	 * @var $size  The engine size.
	 */
	private $size;

	/**
	 * @var $hp The horse powers.
	 */
	private $hp;

	/**
	 * Engine constructor.
	 *
	 * @param float $size   The engine size.
	 * @param float $hp     The horse powers.
	 */
	public function __construct($size, $hp)
	{
		$this->size = $size;
		$this->hp   = $hp;
	}
}