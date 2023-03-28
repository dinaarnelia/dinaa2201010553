<?php
    //model 1
    //$age = array ("Peter"=>"35", "Ben"=>"37", "Joe"=>"43",);

    $age["Jeni"] = "18";
    $age["Sintha"] = "19";
    $age["Dinaa"] = "18";
    $age["Jungwon"] = "19";
    $age["Eka"] = "19";
    header("Content-Type: application/json");
    echo json_encode($age);

