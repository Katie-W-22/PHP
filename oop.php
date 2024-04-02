<?php
echo 'Hello, OOP!';

/*PHP can be written in either an object-oriented or procedural style. OOP consists of classes and objects. Classes are blueprints for objects. Objects are instances of classes. Classes have properties and methods. Properties are variables. Methods are functions. */

//class declaration
class User {
//access modifiers
    //public - can be accessed from outside the class
    //private - can only be accessed from within the class
    //protected - can only be accessed from within the class and its subclasses

    //a method is a function that belongs to a class

    //properties are attributes of the class
    public $name;
    public $email;
    public $password;

    //a constructor is a special method that is called when an object is created

    public function __construct($name, $email, $password) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    //below is a method
function set_name($name) {
    $this->name = $name;
}

//below is another method
    function get_name() {
        return $this->name;
    }
}


$user1 = new User('Katie', 'katie@email.com', 'password');
$user2 = new User('John', 'john@email.com', 'password1');

// echo $user1->name;
// echo $user2->name;


//inheritance is when a class inherits properties and methods from another class (use extends keyword and parent keyword   to access parent class properties and methods)

class Employee extends User {
public function __construct($name, $email, $password, $position) {
    parent::__construct($name, $email, $password);
    $this->position = $position;
}
public function get_position() {
    return $this->position;
}
}

$employee1 = new Employee('Sue', 'susan@email.com', '1234', 'Manager');

echo $employee1->get_position();


    //ORIGINALLY instantiating the class
    // $user1 = new User();

    // $user1->set_name('Katie');
    // echo $user1->get_name();
    
?>