<?php

/***
 * Polymorphism :
 *  -Real time Polymorphism (overriding)
 *  -Complie time Polymorphism (overloading)
 * 
 * #1 overriding : generally function
 * #2 overloading : Operators and function 
 */

 class Base {
    function getData(){
        echo "Base class";
    }
 }

 class Derived extends Base{
    function getData() {
        echo "Child/Derived class";
    }
 }

 $childClass = new Derived();
 $childClass->getData();