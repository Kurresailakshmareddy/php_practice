<?php

// associative = An array made of key => vaule paris

// countries =>capitals
// id => username
// item =>price

  $capitals = array("USA"=>"Washington D.C",
                     "Japan"=> "Kyoto",
                      "South Korea" => "seoul",
                     "India"=>"New Delhi"  );
    
    //$capitals["USA"] = "Las Vegas";
    //$capitals ["china"] = "Beijing";
    //array_pop($capitals);
    // array_shits($capitals);
    //$keys = array_keys($capitals);
    //$values = array_values($captials);
    //$capitals=array_flip($capitals);
    $capitals=array_reverse($captials);

    foreach ($capitals as $key => $value) {
        echo "{$key} = {$value} <br>";
    }

    foreach ($keys as $key) {
        echo "{$key}<br>";
    }

    foreach ($values as $value) {
        echo "{$value} <br>";
    }

    foreach ($capitals as $key => $value) {
        echo "{$key} = {$value} <br>";
    }



?>