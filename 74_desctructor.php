<?php
    class Employee{
        // Properties of our Class
        public $name;
        public $salary; 
 
        // constructor
        function __construct($name1, $salary1){
            $this->name = $name1;
            $this->salary = $salary1;
        }

        //desctructor
        function __destruct(){
            echo "I am destructing $this->name <br>";
        }
    }

    $mandar = new Employee("mandar", 73000);
    $aditya = new Employee("aditya", 100000);
    $ajinkya = new Employee("ajinkya", 56000); 

    echo "The salary of mandar is $mandar->salary <br>";
    echo "The salary of ajinkya is $ajinkya->salary";
?>