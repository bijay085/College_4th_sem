<?php
class College{
    public $college = "Nepal Mega College";
}
interface Student{
    // $a =100; it is wrong in interface class no property defined 
    function getDetails();  //it also dont allow method body , :: function body;
}
interface Subject{
    function getSubjects();
}

//----->multiple inheritance
class Report extends College implements Student, Subject{
    function getDetails(){
        echo $this->college;
    }

    function getSubjects(){

    }
}
$report = new Report();
$report->getDetails();
/**
 * Implements behave like a abstract.
 * then why, we are using "Implements" ?
 *  It supports multiple class inheritance in a derive class.
 *  It suggests for mandatory tasks but dont help to process.
 */

 // if CRUD
// next abstract
 abstract class CRUD {

    private $path;
    //create method
    abstract function create();

    //read method
    abstract function read();

    //update method
    abstract function update();


    //delete method
    abstract function delete();

    //it supports this too
    function displayRecords() { }
    
};

class OnlineClass extends CRUD {
    function create(){}
    function read(){}
    function update(){}
    function delete(){}
}

/**
 * #1
 * Difference between: Abstract and Interface 
 * -Abstract : General abstract can't be inherited in multiple case
 * - Interface : This behaves like an abstract but supports multiple inheritance
 * 
 * #2
 * - Abstract : It allows general type method with body also. 
 *  - Interface : It doesn't allow general type method with body. 
 * 
 * #3
 * - Abstract : It allows attributes/properties.
 *  - Interface : It doesn't allow attributes/properties.
 */