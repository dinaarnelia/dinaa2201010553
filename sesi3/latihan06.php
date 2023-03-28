<?php
    $mhs = array(
        array("Jeni", "2201010540", "Denpasar"),
        array("Sintha", "2201010129", "Tegallalang"),
        array("Ayu", "2201010551", "Tabanan"),
        array("Dina", "2201010553", "Badung"),
    );
    header("Content-Type: application/json");
    echo json_encode($mhs);