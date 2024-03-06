<?php
/**
 * Use of 'static' keyword
 */
class Base
{
    static private $name;
    function __construct($name)
    {
        self::$name = $name;
    }
    static function print_record()
    {
        return self::$name;
    }
}

class Derive extends Base
{
    static private $address;
    function __construct($name, $address)
    {
        parent::__construct($name);
        // $this->address;
        self::$address = $address;

    }

    // function display_record(){
    //     return $this->address;
    // }
    static function print_record()
    {  /*This is override*/ //we need to write static keyword in derived override  class too after using in Parent class"function"; 
        return self::$address;
    }
}
/*instance */
$response = new Derive("My name", "ktm  nepal");
echo $response->print_record() . "<br>";
//after overriding we dont have this and only derived class get printed
// echo $response->display_record();   //we can display all parent and derived class like this from instance of derive class "response".

//if we want to display base class to print then it is done
// $response_base = new Base("My name");
// echo $response_base->print_record() ."<br>";

//but why to make 2 instances so, 
echo Base::print_record(); //static acess, required static method and property 