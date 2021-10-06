<?php 

class Product{
    protected $name;
    protected $price;
    protected $weigth;
    protected $availability;

    public function getName(){
        return $this->name;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getWeigth(){
        return $this->weigth;
    }

    public function getAvailability(){
        return $this->availability;
    }

    protected function __construct($_name, $_price, $_weigth, $_availability){
        $this->name = $_name;
        $this->price = $_price;
        $this->weigth = $_weigth;
        $this->availability = $_availability;
    }
};

class Book extends Product{
    protected $author;
    protected $isbn;
    protected $pages;
    protected $genre;

    protected function __construct($_name, $_price, $_weigth, $_availability, $_author, $_isbn, $_pages, $_genre){
        $this->author = $_author;
        $this->isbn = $_isbn;
        $this->pages = $_pages;
        $this->genre = $_genre;

        parent::__construct($_name, $_price, $_weigth, $_availability);
    }

    public function getAuthor(){
        return $this->author;
    }

    public function getIsbn(){
        return $this->isbn;
    }

    public function getPages(){
        return $this->pages;
    }

    public function getGenre(){
        return $this->genre;
    }
};

class User{
    protected $name;
    protected $surname;
    protected $age;

    public function getName(){
        return $this->name;
    }

    public function getSurname(){
        return $this->surname;
    }

    public function getAge(){
        return $this->age;
    }

    protected function __construct($_name, $_surname, $_age){
        $this->name = $_name;
        $this->surname = $_surname;
        $this->age = $_age;
    }
};

class Premium extends User{
    protected $level;
    protected $discount;

    protected function __construct($_name, $_surname, $_age, $_level, $_discount){
        $this->level = $_level;
        $this->discount = $_discount;

        parent::__construct($_name, $_surname, $_age);
    }

    public function getDiscount(){
        if ($this->level == 1){
            $this->discount = 20;
        }elseif ($this->level == 2){
            $this->discount = 30;
        }elseif($this->level == 3){
            $this->discount = 50;
        }else{
            $this->discount = "Il livello utente non è valido";
        }

        return $this->discount;
    }

}




?>