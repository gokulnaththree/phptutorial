<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Enter a Capital</label><br>
        <input type="text" name="capital"><br><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>


<?php


$capitals = array("USA"=>"Wasington D.C", "Japan"=>"kyoto", "South Korea"=>"seoul", "India"=>"New Delhi");


$capital = $_POST["capital"];

// echo $capital;

 foreach($capitals as $keys => $values){
    
    if($capital == $values){
        
        echo "The given capital of the country is {$keys} <br>";
    }
}

// $country = array_search($capital, $capitals);

// echo "$country";



class Namaste {
    const GREETING_MSG= "<br><br><br>  Namaskaram Dosto!!<br><br>";
  }
  
  echo Namaste::GREETING_MSG;


$x = 10;
$y = 11;
 
function add() {
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
 
add();
echo $z;




class Employees{
    public $name;
  }
  
  $emp1= new Employees();
  $emp1->name = 'Harry';





class exm {  
    public function func1()  
    {  
        echo "example of inheritance  ";  
    }     
}  
class exm1 extends exm {  
    public function func2()  
    {  
        echo "in php ";  
    }     
}  


class exm2 extends exm1{
    public function func3(){

        echo "using extends keyword";
}
}



$obj= new exm(); 
$obj= new exm1();
$obj= new exm2();




$obj->func1();  
$obj->func2();
$obj->func3();

echo "<h1>OOPS</h1>";




class Employee {
    // Properties
    public $name;
    public $surname;
  
    // Methods
    function set_name($name) {
      $this->name = $name;
    }
    function get_name() {
      return $this->name;
    }
  }
  
  $emp1 = new Employee();
  $emp2= new Employee();
  $emp1->set_name('Harry');
  $emp2->set_name('Shayan');
  
  echo $emp1->get_name();
  echo "<br>";
  echo $emp2->get_name();
  ?>

echo "<h1>Numeric Array</h1>";

$bike = array("TVS", "YAMAHA", "RAJDOOT");
echo "I like " . $bike[0] . ", " . $bike[1] . " and " . $bike[2] . ".<br>";

echo "<h1>Associative Array</h1>";

$age = array("Virat"=>"35", "Arshdeep"=>"37", "Rohit"=>"43");

foreach ($age as $key => $value) {
   echo "Name is " .$key. ", Age is ".$value. " years old.<br>";
}

echo "<h1>Multi dimesional Array</h1>";

$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );
  echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
  echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
  echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
  echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";


  echo "<h1>Function</h1>";

function add(...$nums) {  
    $sum = 0;  
    foreach ($nums as $n) {  
        $sum += $n;  
    }  
    return $sum;  
} 
echo add(4, 4, 4, 4), "<br>"; 




function incr($i)  
{  
    $i+1;  
} 


$i = 6;  
incr($i);  
echo $i,  "<br><br>";


Function functionname(){
    echo "Functionname <br>";
    }
    functionname();




echo "Welcome to the world of foreach loops <br>";
$arr = array("Bananas", "Apples", "Harpic", "Bread", "Butter");
foreach ($arr as  $value) {
    echo "$value <br>";
}


$numArr = array(1, 23, 343, 43, 567, 4,5);

foreach ($numArr as $val) {
    echo "$val <br>";
}

$a = 6;
$b = 3;
$c =1;




for($i=1; $i<=3; $i++){

    $c = $c * $a;
    
    
}

echo "The value is: $c  <br>";

// for ($x = 1; $x <= 10; $x++) {
//     echo "The number is: $x <br>";
//   }
  

$newNum = 5;

// do{
//     echo "$newNum <br>";
//     $newNum++;
// }while($newNum<=10);


$number=6;

// if($number = 6){
//     echo "Given number is 6 <br><br>";
// }

// if($number = 5){
//     echo "Given number is not matched<br><br>";
// } else {
//     echo "Given number is matched<br><br>";
// }

if($number == 5){
    echo "Given number is nottt matched<br><br>";
} elseif($number == 6){
    echo "Given number is nottttt matched<br><br>";
} else {
    echo "Given number is matched<br><br>";
}


$d = 2;
$e = 4;
$f = 5;

echo $d+=$e, "<br>"; //6



$a = 2;
$b = 4;
$c = 5;

echo $a+$b, "<br>"; //6
echo $c-$a, "<br>"; //3
echo $a*$b, "<br>"; //8
echo $b/$a, "<br>"; //2
echo $b%$a, "<br>"; //0
echo $c%$b, "<br>"; //1
echo $a**$b, "<br>"; //16






$var; 

if (is_null($var)) {
    echo "<br>";
    echo '$var is NULL'; 
}


echo "<br><br>";
$x = "Hello world!<br><br>";
echo $x;



$x = 55;
var_dump($x);
echo "<br>";

echo "<h1>Comments:</h1>";

echo "//, # - for single line<br>";
echo "/* ...
    ....
    ...
    */ - for multiline";



    echo "<h1>Variable:</h1>";
    echo "<p>containers store the information for manipulation or reference later by the programmer in the code.<p><br>";
    

echo "<h1>Local variable:</h1><br>";


function local_variable()
{


    $x = "I am local variable, access only in inside the function";
    echo $x, "<br>";
}

local_variable();


echo "<h1>Global variable:</h1>";

$y = "I am global variable, but cannot access inside the function until using 'global' keyword";

function global_variable()
{
    // echo $y, "<br>"; uncomment this line to know the difference.
    global $y;
    echo $y, "<br>";
}

global_variable();

echo "<h1>Static variable:</h1>";

function static_variable()
{

    static $num = 0;

    $sum = 1;

    $num++;
    $sum++;

    echo $num, "<br>";
    echo $sum, "<br><br>";
}

static_variable(); //Each time call the static variable its restore the new value after every execution.
static_variable();
static_variable();
static_variable();
static_variable();
static_variable();
