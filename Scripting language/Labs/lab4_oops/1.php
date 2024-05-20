<?php

// Base Class
class Employee {
    protected $name;
    protected $address;

    // Constructor
    public function __construct($name, $address) {
        $this->name = $name;
        $this->address = $address;
    }

    // Setter methods
    public function setName($name) {
        $this->name = $name;
    }

    public function setAddress($address) {
        $this->address = $address;
    }
}

// Derived Class
class Permanent extends Employee {
    protected $salary;
    protected $post;

    // Constructor
    public function __construct($name, $address, $salary, $post) {
        parent::__construct($name, $address);
        $this->salary = $salary;
        $this->post = $post;
    }

    // Setter methods
    public function setSalary($salary) {
        $this->salary = $salary;
    }

    public function setPost($post) {
        $this->post = $post;
    }

    // Display all details
    public function displayAll() {
        echo "Name: " . $this->name . "<br>";
        echo "Address: " . $this->address . "<br>";
        echo "Salary: " . $this->salary . "<br>";
        echo "Post: " . $this->post . "<br>";
    }
}

// Creating 20 students
$students = [];
for ($i = 1; $i <= 20; $i++) {
    $name = "Student" . $i;
    $address = "Address" . $i;
    $salary = rand(20000, 50000);
    $post = "Post" . $i;

    $students[] = new Permanent($name, $address, $salary, $post);
}

// Displaying details of all students
foreach ($students as $student) {
    $student->displayAll();
    echo "<br>";
}
?>

<!-- --multilevel inheritence  -->
<?php

// Interface 1
interface A {
    public function methodA();
}

// Interface 2
interface B {
    public function methodB();
}

// Class implementing Interface 1
class MyClass implements A {
    public function methodA() {
        echo "Method A <br>";
    }
}

// Class implementing Interface 2
class AnotherClass implements B {
    public function methodB() {
        echo "Method B <br>";
    }
}

// Class implementing both Interface 1 and Interface 2
class CombinedClass implements A, B {
    public function methodA() {
        echo "Method A <br>";
    }

    public function methodB() {
        echo "Method B <br>";
    }
}

// Creating objects
$obj1 = new MyClass();
$obj2 = new AnotherClass();
$obj3 = new CombinedClass();

// Calling methods
$obj3->methodA();
$obj3->methodB();

?>
