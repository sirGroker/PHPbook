<?php

class A {
    
    public static $var = 'I\'m static function';

    public static function stCall() {
        echo 'hello from static function';
    }
}


echo'<pre>';
print_r(A::$var);

echo'<pre>';
print_r(A::stCall());