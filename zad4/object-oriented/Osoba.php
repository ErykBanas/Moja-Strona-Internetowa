<?php

class Osoba {
    protected $name;
    protected $lastname;
    protected $pesel;

    // Dokument z klasą zawierający tu odpowiednie funkcje - tworzącą, niszczącą, wywołującą poszczególne pola klasy, drukującą info o wszystkich polach klasy razem, jak i oddzielnie.
    
    public function __construct($name, $lastname, $pesel) { // pseudo zmienną "$this" wywołujemy WTEDY, gdy metoda wywoływana jest z wewnątrz obiektu (tak, jak tu - tzn. z wewnątrz klasy). To jest referencja do wzywanego
    														// obiektu!
        $this->name = $name; // "$this->name", jak pamiętamy, odwołuje się do pola klasy, natomiast "$name" to przekazany konstruktorowi argument!
        $this->lastname = $lastname;
        $this->pesel = $pesel;
        
        echo "Utworzono obiekt klasy ".get_class($this)."<br />" . "imie: " . $this->name . "<br />" . // Odpowiednie zmienne, funkcje i wyłuskane pola!
                "nazwisko: " . $this->lastname . "<br /> " .
                "pesel: " . $this->pesel . "<br />";
    }
    
    public function __destruct() {
        echo "Zniszczono obiekt klasy ".get_class($this)."<br />" . 
                "imie: " . $this->name . "<br />" . 
                "nazwisko: " . $this->lastname . "<br />" . 
                "pesel: " . $this->pesel . "<br />";
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function getLastname() {
        return $this->lastname;
    }
    
    public function getPesel() {
        return $this->pesel;
    }
    
    public function toString() {
        return "imie: ".$this->name."; nazwisko: ".$this->lastname."; pesel: ".$this->pesel.";";
    }
    
    public function printMe() {
        echo "imie: ".$this->name."<br />";
        echo "nazwisko: ".$this->lastname."<br />";
        echo "pesel: ".$this->pesel."<br />";
    }
}

?>