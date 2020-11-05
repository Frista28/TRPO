<?php

class A{
}

Class B extends A{
	public function __construct($a){
	$this->a = $a;
	}
	protected $a;
}

class C extends B{
	public function __construct($a, $b){
	$this->b = $b;
	parent::__construct($a);
	}
	protected $b;
}

$a1 = new A();
$b2 = new B($a1);
$b3 = new B($b2);
$c4 = new C($a1, $b3);
$b5 = new B($c4);
?>
