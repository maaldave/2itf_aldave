<?php
class Student {
    private $name;
    private $age;
    private $gender;

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
    public function setGender($gender){
        $this->gender = $gender;
    }
    public function getGender(){
        return $this->gender;
    }
    public function displayInfo(){
        echo "Name: " . $this->name . "<br>" . "Age: " .  $this->age . "<br>";
    }
}

class Year extends Student {
    private $year;
    
    // constructor with one argument
    public function __construct($year) {
        $this->year = $year;
    }
    
    // getter method for job
    public function getYear() {
        return $this->year;
    }    

    public function displayInfo(){
        echo $this->getName() . " is a student" . "<br>";
    }

    public function printInfo() {
        echo "Year: " . $this->year . "<br>";
    }

    public function printInfo2($adviser) {
        echo "The adviser is " . $adviser . "." . "<br>";
    }
}

class Course extends Year {
    private string $course;
    public function setCourse($course){
        $this->course = $course;
    }
    public function getCourse(){
        return $this->course;
    }
}
class School extends Year {
    private string $school;
    public function setSchool($school){
        $this->school = $school;
    }
    public function getSchool(){
        return $this->school;
    }
}

$student = new Student();
$student->setName("Sachi");
$student->setAge(20);
$student->displayInfo();
echo "<br>";

$student2 = new Year("1ITA");
$student2->setName("Scarlet");
$student2->displayInfo();
$student2->printInfo();
$student2->printInfo2("Ms. Tan");
echo "<br>";

$student3 = new Year("2ITF");
$student3->setName("Slay");
$student3->displayInfo();
$student3->printInfo();
$student3->printInfo2("Ms. Velasquez");
echo "<br>";
?>
