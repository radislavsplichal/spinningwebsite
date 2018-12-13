<?php
namespace CMSCore;
class Instructor extends CMSObject {
    
     public $name = "";
     public $surname = "";
     public $bio = "";
     
     public function saveInstructor(){
     
     $type = "INSTRUCTORS";
     
     $values = '0'."','".$this->name."','".$this->surname."','".$this->bio;

     $result = $this->saveObject($type,$values);
     
     return $result;
    }
}
?>