<?php
require_once 'view/inc/form_select_arrays.php';
require_once 'view/inc/form_validation.php';?>

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
            <section class="mt-4">
                <h2>Suformuokite skrydžio bilietą</h2>
                <p>Užpildykite formą ir spauskite "Spausdinti"</p>

                <?php
                if (isset($_POST['print']) && !empty(validate())) {
                    foreach (validate() as $er_value):?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?= $er_value;?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php
                    endforeach;
                }?>

                <form method="post" class="mb-5">
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
                        <input type="number" id="a_k" name="a_k" class="form-control" placeholder="Asmens kodas"
                               value ="<?= isset($_POST["a_k"]) ? $_POST["a_k"] : "";?>">
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label for="first_name">Vardas</label>
                            <input type="text" id="first_name" name="first_name" class="form-control" placeholder="Vardas"
                                   value="<?= isset($_POST["first_name"]) ? $_POST["first_name"] : "";?>">
                        </div>
                        <div class="form-group col">
                            <label for="last_name">Pavardė</label>
                            <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Pavardė"
                                   value="<?= isset($_POST["last_name"]) ? $_POST["last_name"] : "";?>">
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
                                <input class="form-control" id="price" name="price" type="number" min="1" placeholder="Kaina eurais"
                                       value="<?= isset($_POST["price"]) ? $_POST["price"] : "";?>">
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
                        <textarea class="form-control" id="comment" rows="3" name="comment" placeholder="Įveskite pastabas"><?= isset($_POST["comment"]) ? $_POST["comment"] : "";?></textarea>
                    </div>
                    <button type="submit" name="print" class="btn btn-primary">Spausdinti</button>
                </form>
            </section>

        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="view/js/bootstrap.bundle.min.js"></script>
</body>
</html>

