<?php 
    echo "Hello world!";

    echo "<br>";


    echo "<h1>Comments</h1>";

    echo "//, # - for single line<br>";
    echo "/* ...
    ....
    ...
    */ - for multiline";

    echo "<h1>Local variable</h1><br>";

    
    function local_variable(){

        
        $x = "I am local variable, access only in inside the function";
        echo $x, "<br>";
        
        

    }

    local_variable();


    echo "<h1>Global variable</h1>";

    $y= "I am global variable, but cannot access inside the function until using 'global' keyword";
    
    function global_variable(){
        // echo $y, "<br>"; uncomment this line to know the difference.
        global $y;
        echo $y, "<br>";
    }

    global_variable();

    echo "<h1>Static variable</h1>";

    function static_variable(){
        
        static $num = 0;

        $sum = 1;
         
        $num++;
        $sum++;

        echo $num, "<br>";
        echo $sum, "<br><br>";
    }

    static_variable(); //Each time call the static variable its restore the new value after every increament.
    static_variable();
    static_variable();
    static_variable();
    static_variable();
    static_variable();
    
    
?>

