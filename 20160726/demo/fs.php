<?php
    /**
        Person类
    */
    class Person{
		
		public function __construct($p){
			echo $p;
		}

        /** name属性 */
        public $name='lucy';
        /** age属性 */
        private $age=20;
        /** sex属性 */
        private $sex='女';
		/** addr属性 */
        protected $addr='女';


        /** say方法 */
        public function say(){
            echo 'say';
        }
        /** run方法 */
        public function run(){
            echo 'run';
        }
    }


$class = new ReflectionClass('Person');
/*
$properties = 
$class->getProperties(ReflectionProperty::IS_PRIVATE|ReflectionProperty::IS_PROTECTED);

//print_r($properties);

*/
foreach ($properties as $property) {
    //echo $property->getName();
    echo $property->getDocComment();
}


//$com = $class->getDocComment();

//var_dump($com);

/**/
$methods = $class->getMethods();

foreach ($methods as $method) {
    echo $method->name;
}

//new Person('hello');

$obj = $class->newInstanceArgs(array('hello'));

$obj->say('a','b');