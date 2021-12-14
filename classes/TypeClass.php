<?php


class TypeClass{
	public $people_type_array = ["Учитель", "Ученик"];
	public $type;

	public function __construct($key)
	{
		return $this->type = $this->people_type_array[$key];
	}
}