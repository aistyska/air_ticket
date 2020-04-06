<?php require_once 'view/inc/form_select_arrays.php'; ?>

<!doctype html>
<html lang="lt">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="view/css/bootstrap.min.css">

    <link rel="stylesheet" href="view/css/custom.css">

    <title>AirTicket</title>
</head>
<body>
    <div class="container-fluid">
        <div class="container">
            <section>
                <h2>Suformuokite skrydžio bilietą</h2>
                <p>Užpildykite formą ir spauskite "Spausdinti"</p>

                <form method="post">
                    <div class="form-group">
                        <label for="flight_number">Skrydžio numeris</label>
                        <select class="custom-select" id="flight_number" name="flight_number">
                            <?php foreach ($flight_number as $value) :?>
                                <option value="<?= $value ;?>"> <?= $value ;?> </option>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="a_k">Asmens kodas</label>
                        <input type="number" id="a_k" name="a_k" min="10000000000" max="99999999999" class="form-control" placeholder="Asmens kodas">
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label for="first_name">Vardas</label>
                            <input type="text" id="first_name" name="first_name" class="form-control" placeholder="Vardas">
                        </div>
                        <div class="form-group col">
                            <label for="last_name">Pavardė</label>
                            <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Pavardė">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label for="from">Skrydis iš</label>
                            <select class="custom-select" id="from" name="from">
                                <?php foreach ($airports as $key => $value) :?>
                                    <option value="<?= $key ;?>"> <?= $key ;?> </option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="form-group col">
                            <label for="to">Skrydis į</label>
                            <select class="custom-select" id="to" name="to">
                                <?php foreach ($airports as $key => $value) :?>
                                    <option value="<?= $key ;?>"> <?= $key ;?> </option>
                                <?php endforeach;?>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label for="price">Skrydžio kaina</label>
                            <div class="input-group">
                                <input class="form-control" id="price" name="price" type="number" min="1" placeholder="Kaina eurais">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">€</div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col">
                            <label for="baggage">Bagažas</label>
                            <select class="custom-select" id="baggage" name="baggage">

                                <?php foreach ($baggage as $key => $value) :?>
                                <option value="<?= $key ;?>"> <?= $value ;?> </option>
                                <?php endforeach;?>

                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="comment">Pastabos</label>
                        <textarea class="form-control" id="comment" rows="3" name="comment" placeholder="Įveskite pastabas"></textarea>
                    </div>
                    <button type="submit" name="print" class="btn btn-primary">Spausdinti</button>
                </form>
            </section>

        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="view/js/bootstrap.min.js"></script>
</body>
</html>

