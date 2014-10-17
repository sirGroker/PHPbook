<?

class A {
    
    public function __construct(){
        echo "Hello from construct";
    }
    
    public function __toString() {
        return $str;
    }
    
}


$obj = new A();
