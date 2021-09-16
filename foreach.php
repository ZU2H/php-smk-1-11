<?php 
  
    $nama = array("Joni", "Anna", "George"
    );
    
    var_dump($nama);
    echo "<br>";
    
    foreach ($nama as $key => $value) {
        echo $key."<br>";
    }
    
    $nama = array(
        "Joni" => "Surabaya",
        "Anna" => "Tanggerang",
        "George" => "Cimahi"
    );
    
    var_dump($nama);
    echo "<br>";

    foreach ($nama as $key => $value) {
        echo $key."-".$value;
        echo "<br>";
    }
    
?>