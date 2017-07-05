<?php

class Student extends Osoba { // Student rozszerza tu klasę Osoba!
    protected $grade; // Do tego pola możemy wejść tylko z tej klasy, ewentualnie z klasy dziedziczącej tą klasę!
    
    public function __construct($name, $lastname, $pesel, $grade ) {
        parent::__construct($name, $lastname, $pesel); // Odwołanie się do funkcji klasy, którą dziedziczymy!
        $this->grade = $grade;
        echo "ocena: " . $this->grade . "<br />";;
    }
    
    public function __destruct() {
        echo "Zniszczono obiekt klasy ".get_class($this)."<br />" . 
                "imie: " . $this->name . "<br />" . 
                "nazwisko: " . $this->lastname . "<br />" . 
                "pesel: " . $this->pesel . "<br />" . 
                "ocena: " . $this->grade . "<br />";
    }
    
    public function getGrade() {
        return $this->grade;
    }
    
    public function setGrade($grade) {
        $this->grade = $grade;
    }
    
    public function printMe() {
        parent::printMe();
        echo "ocena: ".$this->grade."<br />";
    }
}

?>