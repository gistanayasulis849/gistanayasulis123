<?php
class A
{
    public $var1;

    public static function __set_state($an_array)
    {
        $obj = new A;
        $obj->var1 = $an_array['var1']; 
        return $obj;
    }
}

class B extends A {
}

$b = new B;
$b->var1 = 5;

eval('$new_b = ' . var_export($b, true) . ';');
var_dump($new_b);
/*
object(A)#2 (1) {
  ["var1"]=>
  int(5)
}
*/
?>
