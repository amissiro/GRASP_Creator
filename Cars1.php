<?php
include_once('Engine.php');
include_once('Transmission.php');
/**
 * Created by PhpStorm.
 * User: azretmissirov
 * Date: 2/18/16
 * Time: 2:48 PM
 */
class Cars1
{
	private $engine;

	private $transmission;

	public function __construct(Engine $engine, Transmission $transmission)
	{
		$this->engine       = $engine;
		$this->transmission = $transmission;
	}
}

$engine       = new Engine(3.5, 229);
$transmission = new Transmission('Manual');

$car  = new Cars1($engine, $transmission);

