<!-- Write an Object Oriented Program in PHP Program to demonstrate  access-modifier.  -->


<?php

class Demo {
    public $publicVar = "Public";
    protected $protectedVar = "Protected";
    private $privateVar = "Private";

    public function showPublic() {
        echo $this->publicVar . "<br>";
    }

    protected function showProtected() {
        echo $this->protectedVar . "<br>";
    }

    private function showPrivate() {
        echo $this->privateVar . "<br>";
    }

    public function showAll() {
        $this->showPublic();
        $this->showProtected();
        $this->showPrivate();
    }
}

class ChildDemo extends Demo {
    public function showProtectedInChild() {
        $this->showProtected();
    }
}

$demo = new Demo();
$demo->showPublic(); // Works
$demo->showAll(); // Works
// $demo->showProtected(); // Error
// $demo->showPrivate(); // Error

$childDemo = new ChildDemo();
$childDemo->showProtectedInChild(); // Works

?>
