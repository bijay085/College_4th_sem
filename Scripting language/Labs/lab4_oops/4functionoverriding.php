<!-- 4. What is function overriding in OOP in PHP? Explain with example. Document should be maintained with proper information of class,  object, members (Properties and Methods), this.  -->

<?php
// PHP program to implement 
// function overriding

// This is parent class
class P {
	
	// Function geeks of parent class
	function geeks() {
		echo "Parent";
	}
}

// This is child class
class C extends P {
	
	// Overriding geeks method
	function geeks() {
		echo "\nChild";
	}
}

// Reference type of parent
$p = new P;

// Reference type of child
$c= new C;

// print Parent
$p->geeks();

// Print child
$c->geeks();
?>
