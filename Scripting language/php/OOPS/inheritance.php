<?php
class Base {


};
//inheritance of Base class on chlid class
class Child extends Base {

};

//example
class College{
    private $name, $address;
    public function __construct($cname, $caddr){
        $this->name = $cname;
        $this->address=$caddr;
    }

    public function report(){
        return ["name"=> $this->name, "address"=>$this->address];

    }
};
// #1 Single inheritance
class Student extends College {
    private $name, $sid, $faculty, $semester;  //if we want to make setter and getter we need them as public cuz they need to access instances and private didnt access in instances 
    function __construct($cname, $caddr){
        parent::__construct($cname,$caddr);
    }
    function setStudentRecord($sname, $sid, $fac, $sem){
        $this->name = $sname;
        $this->sid = $sid;
        $this->faculty = $fac;
        $this->semester = $sem;
    }
    function getStudentRecord(){
        return [
            "name" => $this->name,
            "sid" => $this->sid,
            "faculty" => $this->faculty,
            "semester" => $this->semester
        ];
    }
}
$s1 = new Student("NMC", "KTM"); //object initializing 
//acessing function/method
echo $s1->report()['name']; //executing method from inherited child class

// #2 Multi-level
class Admission extends Student {
    function __construct(){
        parent::__construct("PK", "Bagbajar");
    }
    
};
$admission = new Admission();
echo $admission->report()['address'];
/**
 * Access modifier 
 * -private : Can't be called from inherit child class and by instance from public 
 * -protected : Can be called from inherit child class but not by instance from public 
 * -public : Can be called from inherit child class and by instance from public
 */

/***
 * Abstract 
 * -Mentioning mendatory implementation of the methods
 * i.e : If Base class has : abstract type : Create(), Read(), Update(), Delete()methods
 *      Then, the child class which inherits Base class must call that declared 
 */

 /**Task : all records in table, and traits class  */