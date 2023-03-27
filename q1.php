<?php
class person{
    protected $name;
    protected $age;

    public function __construct($name,$age){
        $this->name=$name;
        $this->age=$age;
    }

    public function greet()
    {
        return "hello ,my name is".$this->name."and I am".$this->age."years old";
    }
}
class student extends person{
    protected $major;

    public function __construct($name,$age,$major)
    {
        parent::__construct($name,$age);
        $this->major=$major;
    }
    public function greet(){
        return "hello my name is ".$this->name.",I am ".$this->age."years old and I am majoring in ".$this->major.".";
    }
}

$student =new student("abhi",20,"computer science");
echo $student->greet();
?>