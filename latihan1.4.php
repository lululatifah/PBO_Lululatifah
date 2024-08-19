<?php
// Parent class
abstract clas Car {
    public $nama;
    public function _construct($nama) {
        $this->name = $name;
    }
    abstract public function intro();
}

// Child classes
class Audi extends Car {
    public function intro(); {
        return "Choose German quality! I'm an $this->name!";
    } 
}

class Volvo extends Car {
    public function intro(){
        return "Proud to be Swedish! I'm an $this->name!";
    }
}

class Citaroen extends Car {
    public function intro(){
        return "French extravagance! I'm an $this->name!";
    }
}
?>
