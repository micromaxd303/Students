<?php


class TypeClass{
	public $animal_type_array = ["Учитель", "Ученик"];
	public $type;

	public function __construct($key)
	{
		return $this->type = $this->animal_type_array[$key];
	}
}