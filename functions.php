<?php

/*function = wirte some code once,reuse when you need it 
              type () after function name to invoke Ex: add()
              subtract() multiply() divide()
*/
        function happy_birthday($first_name, $age){
            echo "Happy Birthday $first_name <br>";
            echo "you are {$age} years old! <br><br>";
        }

        happy_birthday("lakshma",25);


        function is_even($number){
            return $number - 2;
        }
        echo is_even(10);

        function hypotenuse (int $a , int $b){
            $c = sqrt($a**2 + $b**2 );
            return $c;
        }
        echo hypotenuse (4.6,5.6);

?>