<?php

class Profile {
    // constructor
    public function __construct() {
        $this->name = null;
        $this->age = null;
        $this->address = null;
        $this->hobbies = null;
        $this->is_married = null;
        $this->list_school = null;
        $this->skills = null;
        $this->interest_in_coding = null;
    }
    
    public function setName($name){
        $this->name = $name;
    }
    public function setAge($age){
        $this->age = $age;
    }
    public function setAddress($address){
        $this->adress = $address;
    }
    public function setHobbies($hobbies){
        $this->hobbies = $hobbies;
    }
    public function setMarriage($is_married){
        $this->is_married = $is_married;
    }
    public function setList_school($list_school){
        $this->list_school = $list_school;
    }
    public function setSkills($skills){
        $this->skills = $skills;
    }
    public function setInterest($interest_in_coding){
        $this->interest_in_coding = $interest_in_coding;
    }
    
    
}

class School{
    public function __construct($name, $year_in, $year_out, $major) {
        $this->name = $name;
        $this->year_in = $year_in;
        $this->year_out = $year_out;
        $this->major = $major; 
    }
}

class Skill{

    public function __construct($level, $skill_name) {
        $this->skill_name = $skill_name;
        $this->level = $level;        
    }
}

abstract class Level {
    const BEGINNER = "Beginer";
    const ADVANCED = "Advanced";
    const EXPERT = "Expert";
}


function getProfileJson(){
    //setup profile
$alex = new Profile();
$alex->setName("Aditya Nugroho");
$alex->setAge(21);
$alex->setAddress("Karanganyar, Jawa Tegnah");
$alex->setHobbies(["Badminton", "Computer Games", "Coding"]);
$alex->setMarriage(false);
$alex->setList_school([new School("SMAN 1 Karanganyar", 2012, 2015, "IPA"),
                        new School("Universitas Sebelas Maret", 2015, 2019, "Teknologi Informasi")]);
$alex->setSkills([new Skill((Level::BEGINNER), "PHP"), 
                    new SKill((Level::ADVANCED), "Java")]);
$alex->setInterest(true);
$JSON = json_encode($alex);
return $JSON;
}

echo getProfileJson();
?>