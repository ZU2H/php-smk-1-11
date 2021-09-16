<?php 

    // $nama = array("Joni", "Anna", "George", 34, 6.9);
    
    // var_dump($nama);
    // echo "<br>";
    
    // echo $nama[3];
    // echo "<br>";
    
    // for ($i=0; $i < 5; $i++) { 
    // echo $nama[$i]."<br>";
    // }
    
    // foreach ($nama as $key) {
        //     echo $key."<br>";
    // }
    
    $nama = array(
        "Joni" => "Surabaya",
        "Anna" => "Tanggerang",
        "George" => "Cimahi"
    );

    var_dump($nama);
    echo "<br>";
    
    echo $nama["Joni"];
    echo "<br>";

    foreach ($nama as $key => $value) {
        echo $key." Dari Kota ".$value;
        echo "<br>";
    }
    

?>