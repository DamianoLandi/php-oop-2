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

    public function __construct($_name, $_price, $_weigth, $_availability){
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

    public function __construct($_name, $_price, $_weigth, $_availability, $_author, $_isbn, $_pages, $_genre){
        $this->author = $_author;
        $this->isbn = $_isbn;
        $this->pages = $_pages;
        $this->genre = $_genre;
        $this->name = $_name;
        $this->price = $_price;
        $this->weigth = $_weigth;
        $this->availability = $_availability;
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

    public function __construct($_name, $_surname, $_age){
        $this->name = $_name;
        $this->surname = $_surname;
        $this->age = $_age;
    }
};

class Premium extends User{
    protected $level;
    protected $discount;

    public function __construct($_name, $_surname, $_age, $_level, $_discount = 0){
        $this->level = $_level;
        $this->discount = $_discount;
        $this->name = $_name;
        $this->surname = $_surname;
        $this->age = $_age;
    }

    public function getDiscount(){
        if ($this->level == '1'){
            $this->discount = 20;
        }elseif ($this->level == '2'){
            $this->discount = 30;
        }elseif($this->level == '3'){
            $this->discount = 50;
        }else{
            $this->discount = "Il livello utente non è valido";
        }

        return $this->discount;
    }

};

$user = new Premium("Mario", "Rossi", "25", "2");
$book = new Book("Eragon", 25, "0.5", "18", "Franco", "1234567890123", "569", "Fantasy");

$discounted_book = $book->getPrice() / 100 * (100 - $user->getDiscount());


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Il prezzo standard è <?php echo $book->getPrice() ?>$</p>
    <p>Il prezzo per l'utente <?php echo $user->getName() . " " . $user->getSurname()?> è <?php echo $discounted_book?>$</p>
</body>
</html>