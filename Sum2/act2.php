<<?php
class Student {
    private $name;
    private $age;

    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
    public function setAge($age){
        $this->age = $age;
    }
    public function getAge(){
        return $this->age;
    }
    public function displayInfo(){
        echo "Name: " . $this->name . "<br>" . "Age: " .  $this->age . "<br>";
    }
}

class Education extends Student {
    private string $year;
    public function setYear($year){
        $this->year = $year;
    }
    public function getYear(){
        return $this->year;
    }
    public function practice(){
        echo "Name: " . $this->getName() . "<br>" . "Year: " . $this->year;
    }
}

$person = new Education();
$person->setName("Scarlet");
$person->setAge(20);
$person->displayInfo();
$person->setYear("First");
$person->practice();

/*
class Course extends Education {

}

class School extends Education {

}
*/
?>