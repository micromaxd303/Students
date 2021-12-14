<?php

require_once "GroupClass.php";

class StudentClass extends GroupClass{
	public function __construct($type, $name, $age)
	{
		parent::__construct($type, $name, $age);
	}
}