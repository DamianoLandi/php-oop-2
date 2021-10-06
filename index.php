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
}



?>