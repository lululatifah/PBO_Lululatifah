<?php
class Base {
    function display() {
        echo "\nBase class function declared final!";
    }
    function demo(){
        echo "\nBase class function!";
    }
}
class Derived extends Base {
    function demo () {
    echo "\nDerived class function!";
    }
}
$Ob = new Base;
$Ob->demo();
$Ob->display();
$Ob2 = new Derived;
$Ob2->demo();
$Ob2->display();
?>
