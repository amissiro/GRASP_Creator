<?php
include_once('Engine.php');
include_once('Transmission.php');
/**
 * Created by PhpStorm.
 * User: azretmissirov
 * Date: 2/18/16
 * Time: 2:48 PM
 */
class Cars
{
	private $engine;

	private $transmission;

	public function __construct($engineSize, $horsePowers, $transmissionType)
	{
		$this->engine       = new Engine($engineSize, $horsePowers);
		$this->transmission = new Transmission($transmissionType);
	}
}

//GRASP Creator
$car = new Cars(3.5, 229, 'Manual');

//Non-GRASP Creator

