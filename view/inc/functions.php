<?php

function flightDate() {
    $day = rand(1, 31);
    $month = rand(1, 12);
    $date = mktime(0, 0, 0, date("m")+$month, date("d")+$day, date("Y")+1);
    return date("d M Y", $date);
}


function generateTimes() {
    $h = rand(0, 23);
    $min = rand(0, 59);
    $departure = $h * 60 + $min;
    $duration = rand(30, 720);
    $arrival = $departure + $duration;
    $arrival = (($arrival / 60) % 24) . ":" . str_pad(strval($arrival % 60),2, "0", STR_PAD_LEFT);
    $duration = floor($duration / 60) . "h " .  str_pad(strval($duration % 60), 2, "0", STR_PAD_LEFT) . "min";
    $departure = $h . ":" . str_pad(strval($min), 2, "0", STR_PAD_LEFT);
    return [
        "departure" => $departure,
        "duration" => $duration,
        "arrival" => $arrival
    ];
}


function getCompany($companies) {
    return $companies[array_rand($companies)];
}


function generateTicket($companies){
    $times = generateTimes();
    $ticket = [
        "date" => flightDate(),
        "company" => getCompany($companies)
    ];
    $ticket = array_merge($_POST, $ticket, $times);
    if ($ticket["baggage"] != 20) {
        $ticket["price"] += 30;
        $ticket["tax"] = 30;
    } else {
        $ticket["tax"] = 0;
    }
     return $ticket;
}
