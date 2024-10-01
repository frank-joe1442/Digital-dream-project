<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Animal{
        public $name;
        public $color;
        public $legs;
        public $sound;

        function createAnimal($n, $c, $l, $s){
            $this->name = $n;
            $this->color = $c;
            $this->legs = $l;
            $this->sound = $s;
        }
//...........................................for name
function addName($n){
    $this->name = $n;
}

function addcolor($c){
    $this->color = $c;
}



function addLegs($l){
    $this->legs = $l;
}


function addsound($s){
    $this->sound = $s;
}

function showAnimal(){
    echo $this->name . "is my name";
    echo $this->legs . "is the nums of legs i have <br>";
    echo $this->color . "is my color <br>";
    echo $this->sound . "is the sound of my voice <br>";
}

}

$dog = new Animal();
$dog->addName('Dog');
$dog->addLegs(4);
$dog->addColor('white');
$dog->addSound('woo');
$dog->showAnimal();

echo $dog->name .'<br>';

$hen = new Animal();
$hen->addName('hen');
$hen->addColor('red');
$hen->addLegs(2);
$hen->addSound('kokorokoo');
$hen->showAnimal();

$fish = new Animal();
$fish->createAnimal('shark', 'black', 0, 'weee');
$fish->showAnimal();






// a car class

class car{
    public $name;
    public $model;
    public $yearofproduction;
    public $speed;

    function __construct($name, $model, $year, $speed){
        $this->name = $name;
        $this->model = $model;
        $this->yearofproduction = $year;
        $this->speed = $speed;

    }

    function showCar(){
        echo $this->name . "is my name";
        echo $this->model . "is my model <br>";
        echo $this->yearofproduction . "is my year of production <br>";
        echo $this->speed . "is my speed limit <br>";
    }
}
echo '<br>';

$toyota = new Car('toyota', '2020AG', 2023, '200km/hr' );
$toyota->showCar();




    ?>


</body>
</html>