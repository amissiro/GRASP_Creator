<?php
include_once('Engine.php');
include_once('Transmission.php');

/**
 * Class Cars [GRASP Creator]
 */
class Cars
{
	/**
	 * @var Engine The engine object.
	 */
	private $engine;

	/**
	 * @var Transmission The transmission object.
	 */
	private $transmission;

	/**
	 * Cars constructor [GRASP Creator].
	 *
	 * @param float  $engineSize         The engine size.
	 * @param float  $horsePowers        The horse powers.
	 * @param string $transmissionType   The transmission type.
	 */
	public function __construct($engineSize, $horsePowers, $transmissionType)
	{
		$this->engine       = new Engine($engineSize, $horsePowers);
		$this->transmission = new Transmission($transmissionType);
	}
}

//Create a new car object
$car = new Cars(3.5, 229, 'Manual');

print_r($car);


