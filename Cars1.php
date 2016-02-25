<?php
include_once('Engine.php');
include_once('Transmission.php');

/**
 * Class Cars1 [Non GRASP Creator]
 */
class Cars1
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
	 * Cars1 constructor.
	 *
	 * @param Engine       $engine               The engine object.
	 * @param Transmission $transmission         The transmission object.
	 */
	public function __construct(Engine $engine, Transmission $transmission)
	{
		$this->engine       = $engine;
		$this->transmission = $transmission;
	}
}

$engine       = new Engine(3.5, 229);
$transmission = new Transmission('Manual');

//Create a new car object
$car  = new Cars1($engine, $transmission);

