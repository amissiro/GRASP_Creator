<?php

/**
 * Created by PhpStorm.
 * User: azretmissirov
 * Date: 2/18/16
 * Time: 2:48 PM
 */
class Engine
{
	private $size;

	private $hp;

	public function __construct($size, $hp)
	{
		$this->size = $size;
		$this->hp   = $hp;
	}
}