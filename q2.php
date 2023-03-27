<?php
class person{
    public $name;
    public $age;

    public function __construct($name,$age){
        $this->name=$name;
        $this->age=$age;
    }
    public function setAge($newage){
        $this->age=$newage;
    }
}
class student extends person{
    public $studentid;

    public function __construct($name,$age,$studentid){
        parent::__construct($name,$age);
        $this->studentid=$studentid;
    }
    public function setStudentId($newStudentId){
        $this->studentid=$newStudentId;
    }
}
class teacher extends person{
    public $teacherid;
    public function __construct($name,$age,$teacherid)
    {
        parent::__construct($name,$age);
        $this->teacherid=$teacherid;
    }

    public function setTeacherid($newTeacherId){
        $this->teacherid=$newTeacherId;
    }
}

$person=new person("John",30);
$student=new student("alice",20,1234);
$teacher=new teacher("bob",40,5678);

$person->setAge(35);
$student->setStudentId(5678);
$teacher->setTeacherId(1234);

echo "Person: {$person->name},{$person->age}<br>";
echo "Student: {$student->name},{$student->age},{$student->studentid}<br>";
echo "Teacher: {$teacher->name},{$teacher->age},{$teacher->teacherid}"

?>