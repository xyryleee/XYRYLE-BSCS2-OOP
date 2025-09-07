<?php

class Driver {
    public $name;
    public $age;
    public $model;

    public function __construct($pname, $page, $pmodel){
        $this->name=$pname;
        $this->age=$page;
        $this->model=$pmodel;
        echo "Driver has acquired a car <br>";
        echo "Driver Name: {$this->name}<br>";
        echo "Driver Age: {$this->age}<br>";
        echo "Car being Driven: {$this->model}<br>";
    }

    public function moving(){
        echo "Driver is moving<br>";
    }
    
    public function steering(){
        echo "Driver is steering<br>";
    }
}

$Xyryle = new Driver("Xyryle", 20, "Toyota");
$Xyryle->moving();
$Xyryle->steering();
echo "<br>";

class Car {
    public $color;
    public $model;
    public $fuel;
    public $range;
    public $driver;

    public function __construct($pcolor, $pmodel, $pfuel, $prange, $pdriver){
        $this->color=$pcolor;
        $this->model=$pmodel;
        $this->fuel=$pfuel;
        $this->range=$prange;
        $this->driver=$pdriver;

        echo "Car Created <br>";
        echo "Car Color: {$this->color}<br>";
        echo "Car Model: {$this->model}<br>";
        echo "Car Fuel: {$this->fuel}L<br>";
        echo "Car Range: {$this->range}<br>";
        echo "Car Driver: {$this->driver}<br>";
    }

    public function moving(){
        echo "Car is moving<br>";
    }
    
    public function stopping(){
        echo "Car is stopping<br>";
    }
}

$Broom = new Car("Red", "Toyota", 70, "500km", $Xyryle->name);
$Broom->moving();
$Broom->stopping();
echo "<br>";

class Musician {
    public $name;
    public $age;
    public $genre;

    public function __construct($pname, $page, $pgenre){
        $this->name=$pname;
        $this->age=$page;
        $this->genre=$pgenre;
        echo "Musician Created <br>";
        echo "Musician Name: {$this->name}<br>";
        echo "Musician Age: {$this->age}<br>";
        echo "Musician Genre: {$this->genre}<br>";
    }

    public function sing(){
        echo "{$this->name} is singing<br>";
    }

    public function compose(){
        echo "{$this->name} is composing<br>";
    }

    public function play_instrument(){
        echo "{$this->name} is playing an instrument<br>";
    }
}

$Taylor = new Musician("Taylor Swift", 34, "Pop");
$Taylor->sing();
$Taylor->compose();
$Taylor->play_instrument();
echo "<br>";

class footClub {
    public $name;
    public $country;
    public $league;

    public function __construct($pname, $pcountry, $pleague){
        $this->name=$pname;
        $this->country=$pcountry;
        $this->league=$pleague;
        echo "Football Club Created <br>";
        echo "Club Name: {$this->name}<br>";
        echo "Country: {$this->country}<br>";
        echo "League: {$this->league}<br>";
    }

    public function play_match(){
        echo "{$this->name} is playing a match<br>";
    }

    public function train(){
        echo "{$this->name} is training<br>";
    }

    public function sign_player(){
        echo "{$this->name} has signed a player<br>";
    }

    public function sell_player(){
        echo "{$this->name} has sold a player<br>";
    }

}

$LFC = new footClub("Liverpool", "England", "Premier League");
$LFC->train();
$LFC->sign_player();
$LFC->sell_player();
$LFC->play_match();
echo "<br>";

class Crush {
    public $name;
    public $age;
    public $hobby;
    public $status;

    public function __construct($pname, $page, $phobby, $pstatus){
        $this->name=$pname;
        $this->age=$page;
        $this->hobby=$phobby;
        $this->status=$pstatus;
        echo "Crush Created <br>";
        echo "Crush Name: {$this->name}<br>";
        echo "Crush Age: {$this->age}<br>";
        echo "Crush Hobby: {$this->hobby}<br>";
        echo "Crush Status: {$this->status}<br>";
    }

    public function chat(){
        echo "You are chatting with your crush<br>";
    }

    public function date(){
        echo "{$this->name} is going on a date with you<br>";
    }

    public function call(){
        echo "You and {$this->name} are on a call<br>";
    }

    public function flirt(){
        echo "You are flirting with {$this->name}<br>";
    }
}

$Marie = new Crush("Marie", 19, "Playing Video Games", "Single");
$Marie->chat();
$Marie->date();
$Marie->call();
$Marie->flirt();
echo "<br>";

?>
