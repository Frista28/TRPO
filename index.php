<?php
class A{
    function equ ($a, $b){
        $x = -($b/$a);
        $this -> x = $x;
        return $x;
    }
}
class B extends A{
    protected function dis($a, $b, $c){
        $d = ($b**2)-4*$a*$c;
        return $d;
    }
    public function check ($a, $b, $c) {
        $x = $this -> dis($a, $b, $c);
        if ($x > 0 ) {
            return $this -> x = array (-($b + sqrt($x)/2*$a),
                -($b - sqrt($x)/2*$a)
            );
        }
        if ($x < 0) {
            return $this -> x = NULL;
        }
        return $this -> x = -($b/2*$a);

    }
}
$a = new A();
$b = new B();
$a -> equ(2,4);
$a = var_dump($a);
$b -> check(2,4,2);
$b = var_dump($b);
?>