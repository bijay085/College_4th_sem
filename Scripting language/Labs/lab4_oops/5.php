<!-- 5. Write an Object Oriented Program to demonstrate constructor,  destructor, static and final keywords. The program should inherits  constructor in subclass from base class -->
<?php
// Base class
class BaseClass {
    public static $staticVar = 0;

    // Constructor
    public function __construct() {
        echo "BaseClass constructor called\n";
        self::$staticVar++;
    }

    // Destructor
    public function __destruct() {
        echo "BaseClass destructor called\n";
    }

    // Static method
    public static function staticMethod() {
        echo "Static method called. Static variable value: " . self::$staticVar . "\n";
    }

    // Final method
    public final function finalMethod() {
        echo "Final method called from BaseClass\n";
    }
}

// Subclass inheriting from BaseClass
class SubClass extends BaseClass {
    // Constructor
    public function __construct() {
        parent::__construct(); // Call the parent class constructor
        echo "SubClass constructor called\n";
    }

    // Destructor
    public function __destruct() {
        echo "SubClass destructor called\n";
        parent::__destruct(); // Call the parent class destructor
    }

    // This method will cause an error if uncommented because finalMethod in BaseClass is final
    // public function finalMethod() {
    //     echo "This will cause an error\n";
    // }
}

// Creating an object of SubClass
$obj = new SubClass();

// Call static method
SubClass::staticMethod();

// Destructor will be called automatically when the script ends or the object is no longer needed
?>
