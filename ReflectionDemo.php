<?php
class ReflectionDemo{
	public static function getSchema() {

		$className = get_called_class();
		echo $className;

		$class =  new ReflectionClass($className);
		$parent = $class->getParentClass();
		
		//这句话报错，非常奇怪
		//echo (new ReflectionClass($className))->getParentClass();

		//$parentClassName = (new ReflectionClass($className))->getParentClass()->getName();

		//echo $parentClassName;
	}
}

ReflectionDemo::getSchema();