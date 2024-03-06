<?php
/**
 * Class -> Object -> Instance
 */

//  class CollegeRecord {
//     //now they all are members with child :
//     //var, public, private or protected
//     var $cname, $caddr, $caffl;
//     function __construct() {
//         $this->cname = "Nepal Mega College";
//         $caddress = "Bijuli Bajar";
//         $caffl = "TU";
//     }
//     function getCollegeData(){
//         echo $this->cname. "<br>";  //this didnt work until we add this->
        
//     }
//  };

//  $nmc = new CollegeRecord(); //arguements
//  $nmc -> getCollegeData();

 //now for dyanmic data changes
 class CollegeRecord2 {
    //now they all are members with child :
    //var, public, private or protected
    var $cname, $caddr, $caffl;
    function __construct($name, $caddress, $caffl) {
        $this->cname = $name;
        $this->caddress = $caddress;
        $this->caffl = $caffl;
    }
    function getCollegeData(){
        echo $this->cname . "<br>";  //this didnt work until we add this->
        // echo $this->caddr . "<br>";  //this didnt work until we add this->
        // echo $this->caffl . "<br>";  //this didnt work until we add this->
        
    }
 };

 $nmc = new CollegeRecord2("Nepal Mega College","Bijuli Bajar","TU"); //arguements
 $nmc -> getCollegeData();

 $pk = new CollegeRecord2("PK College","Baag bajar","PU"); //arguements
 $pk -> getCollegeData();


//  lets create derived class using CollegeRecord2 class as base 
class NMC extends CollegeRecord2{
    var $staff, $department, $payroll;

    function __construct(){
        parent::__construct("Nepal Mega College","Bijuli Bajar","TU") ;
    }
    function setRecord($staff, $department, $payroll){
        $this->staff = $staff;
        $this->department =$department;
        $this->payroll = $payroll;
    }
    function getRecord(){
        return $this->staff . "|" . $this->department; 
    }
};
$nmc_college = new NMC();
$nmc_college->setRecord("Staff Name", "BCA", "Paid");
$nmc_college -> getRecord();

//:: scope resolution