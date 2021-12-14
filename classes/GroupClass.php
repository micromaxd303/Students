<?php

require_once "TypeClass.php";
require_once "./interfaces/StudentInterface.php";

class GroupClass extends TypeClass implements StudentInterface{
	public $age;
	public $name;

	public function __construct($type, $name, $age)
	{
		$this->type = parent::__construct($type);
		$this->name = $name;
		$this->age = $age;
	}

		public function sleep()
	{
		echo "($this->type) по имени ($this->name) спит. Bzzzzzzz. <br/>";
	}
		public function talking()
	{
		echo "($this->type) по имени ($this->name) разговаривает. <br/>";
	}
		public function playing()
	{
		echo "($this->type) по имени ($this->name) играет в телефон <br/>";
	}
		public function learning()
	{
		echo "($this->type) по имени ($this->name) решает задачи. <br/>";
	}
		public function flexing()
	{
		echo "($this->type) по имени ($this->name) принес китайскую колонку JBL и флексит. <br/>";
	}

}