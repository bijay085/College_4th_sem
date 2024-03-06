<?php
/**
 * <-----------------------------Importan For Exam Long Qenstion---------------------------------->
 * Computer Language:
 * -Markup Language (HTML, XHTML, XML)
 * -Style Language (CSS &  CSS  prepocessors)
 * -Scripting language (JS, PHP)
 * 
 * - Programming Language
 *      - High level
 *          -C/C++, python, Java etc...
 *      - Low level
 *          - FOrtrain, C/C++ etc....
 * 
 * 
 * #2 Programming Paradigm: (Functional Orginization)
 *  -Process Orinted Programming (pop)
 *  - Object Orinted Programming (OOP)
 * 
 * 
 * #3 System/Programe Architecture (Structural Organization)
 *       - MVC (Model, View, Controller)
 *       - 3-Tier (Data Access Layer, Presentation Laye, Business Logic Layer)
 *
 * 
 * 
 * 
 * 
 */


/**
 * OOP:
 * ------------------------------------------------------------------------------------------------
 * 1.   Class
 * 2. Members
 *          - Properties/Attributes
 *          - Methods/Functions
 * 
 * 3.Object
 * 4. Instace
 * 5. Inheritance
 *      -Single & Multiple Base Class
 *      - Single Level & Multi-level
 * 6. Abstraction (Data Hiding)
 * 7. Encapsulation (Setter and Getter Combination)
 * 8. Polymorphism
 *      - Overriding (Real Time)
 *          - Function IVerriding(general:Operation Can be there..........)
 * 
 *      - Overloading(Compile Time)
 *          - Function Overloading
 *          - OPerator Overloading (actually for complex caluclation: i.e: )
 *                  -Example
 *                          Caluclate Real Number & Imaginery number
 *                                  = 10 + 2i etc....
 * 
 * 9. Access Modifier
 *          - Public (open)
 *          - Protected (Not open,  but access with object)
 *          - Private (Not accessiable, only datya handling)
 * 
 * 10. Contructor / Destructor
 * 11. Namespace (path manager)
 * 
 * -----------------------------------------------------------------------------------------------------------------------
 * KeyWords:
 *      -Class, Abstract, public, privated, protected, interface, this
 *  #this refers to the current instance
 *  # instance will be multiple of an object.
 *  # Object is an executation of class
 *  # Class is a blueprint of the members orginazation for the object..
 * 
 * 
 * 
 * Note: 
 *      - Overloding is not avilable in PHP, to make it possible we can use magic function
 *      - "Magic function" is a simple methodof switch case to access same name methods having different argument status for oveloading concept.
 * ___________________________________________________________________________________________________________________________________
 * 
 * 
 * #Overloading method example:
 *      -getName(); //Function without arguement
 *      -getName($name); //Function with one argument
 *      -getName($name, $adrs); //Function with two argument
 * 
 * 
 * Note: using above all three functions of same name behaving different functions considering argument status is called overloading.
 * 
 * 
 * 
 * 
 */

 //OOP Example:
    /**
     * -class
     * -members
     * -object
     * -instance
     * - Then we can execute for the specific tasks
     */

    //  class name:pascalCase

     class StudentRecord{
        // properties
        var $name;
        // method
        function setName()
        {
            $this->name = "Bijay";
        }
        function getName()
        {
            echo $this->name;
        }
        
     };


    /**
     * Major Note:
     * - Class is just a blue-print, which never occupies memory of the system until making instance of the object using that class.
     */
    // Instance = Object ();
    $s1 = new StudentRecord();
    $s1 -> setName();
    $s1 -> getName();


