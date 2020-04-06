<?php
require_once 'view/inc/form_select_arrays.php';
require_once 'view/inc/functions.php';?>

<!doctype html>
<html lang="lt">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="view/css/bootstrap.min.css">

    <link rel="stylesheet" href="view/css/custom.css">

    <script src="https://kit.fontawesome.com/994bdecb51.js" crossorigin="anonymous"></script>

    <title>AirTicket</title>
</head>
<body>
    <div class="container-fluid">
        <div class="container">

            <?php  $ticket = generateTicket($companies);?>

            <div class="row border border-dark rounded ticket mt-4">
                <div class="col-12 company pt-2 mb-2">
                    <h4><i class="fas fa-plane"></i> AIR TICKET</h4>
                </div>
                <section class="col-9">
                    <div class="row">
                        <div class="col">
                            <h4> <?= mb_strtoupper($ticket["first_name"]) . " " . mb_strtoupper($ticket["last_name"]) ;?> </h4>
                            <p> <?= $ticket["a_k"] ;?> </p>
                        </div>
                        <div class="col">
                            <p>From: <strong> <?= $airports[$ticket["from"]] . " (" . $ticket["from"] . ")" ;?></strong></p>
                            <p>To: <strong> <?= $airports[$ticket["to"]] . " (" . $ticket["to"] . ")" ;?></strong></p>
                        </div>
                    </div>
                    <div class="row">
                        <p class="col">Date: <?= $ticket["date"] ;?></p>
                        <p class="col">Flight: <?= $ticket["flight_number"] ;?> </p>
                        <p class="col"> <?= $ticket["duration"] ;?></p>
                        <p class="col">Luggage: <?= $baggage[$ticket["baggage"]] ;?></p>
                    </div>
                    <p><i class="fas fa-plane-departure"></i> <?= $ticket["departure"] . " " . $ticket["from"] ;?> <i class="fas fa-plane-arrival ml-3"></i> <?=$ticket["arrival"] . " " . $ticket["to"] ;?></p>
                </section>
                <section class="col-3">
                    <ul class="list-group ">
                        <li class="list-group-item">Ticket: <?= $ticket["price"] - $ticket["tax"] ;?> €</li>
                        <li class="list-group-item">Tax: <?= $ticket["tax"] ;?> €</li>
                        <li class="list-group-item">Price: <?= $ticket["price"] ;?> €</li>
                    </ul>
                </section>
                <div class="company col-12 pt-3">
                    <p><i class="fas fa-globe-europe"></i> <?= $ticket["company"] ;?> </p>
                </div>

            </div>



        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="view/js/bootstrap.min.js"></script>
</body>
</html>
