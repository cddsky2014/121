<?php
	/**
		Person类
	*/
	class Person{
		public function __CONSTRUCT($name='lili'){
			echo $name;
		}
		/** name属性 */
		public $name='lucy';
		/** age属性 */
		private $age=20;
		/** sex属性 */
		private $sex='女';
		/** say方法 */
		public function say(){
			echo 'say';
		}
		/** run方法 */
		public function run(){
			echo 'run';
		}
	}

	$class = new ReflectionClass('Person'); // 建立 Person这个类的反射类 
	//$instance  = $class->newInstanceArgs(); // 相当于实例化Person 类 

	$properties = $class->getProperties();

	foreach ($properties as $property) {
		echo $property->getName();
		echo '<hr>';
	}

?>