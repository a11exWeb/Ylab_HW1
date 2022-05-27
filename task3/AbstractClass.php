<?php
abstract class AbstractClass
{
    abstract public function save();
    abstract public function new();

    public function getName() {
       return "qwerty";
    }
}

class ChildClass extends AbstractClass
{
    public function save() {
        return "save";
    }
	
	public function new() {
        return "new";
    }
	
	public function getName() {
		
		return parent::getName()." "."Здорово!";
    }
	
}


?>