<?php

class User {
    public $login;
    public $firstname;
    public $lastname;
    
    public function __construct($login, $firstname, $lastname) {
        $this->login = $login;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }
}

$users = array();
$users[] = new User("adameka", "Tomasz", "Adamek");
$users[] = new User("adamczp", "Piotr", "Adamczyk");
$users[] = new User("babiarp", "Przemysław", "Babiarz");
$users[] = new User("cegielh", "Hipolit", "Cegielski");
$users[] = new User("cegielk", "Krzysztof", "Cegielski");
$users[] = new User("cybulsh", "Henryk", "Cybulski");
$users[] = new User("brzeczg", "Grzegorz", "Brzęczyszczykiewicz");
$users[] = new User("kowalsj", "Jan", "Kowalski");
$users[] = new User("kowalsm", "Marian", "Kowalski");
$users[] = new User("kowalcp1", "Piotr", "Kowalczyk");
$users[] = new User("kowalcp2", "Przemysław", "Kowalczuk");
$users[] = new User("kott", "Tomasz", "Kot");
$users[] = new User("malysza", "Adam", "Małysz");
$users[] = new User("nowaka", "Andrzej", "Nowak");
$users[] = new User("wisniej", "Janek", "Wiśniewski");

?>