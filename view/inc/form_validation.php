<?php

function validate() {
    $val_errors = [];
    if (empty($_POST["flight_number"])) {
        $val_errors["flight_number"] = "Neįvestas skrydžio numeris.";
    }
    if (!preg_match('/^[3-6][0-9]{2}[0,1][0-9][0-9]{2}[0-9]{4}$/', $_POST["a_k"])) {
        if (empty($_POST["a_k"])) {
            $val_errors["a_k"] = "Neįvestas asmens kodas";
        } else if (strlen($_POST["a_k"]) < 11) {
            $val_errors["a_k"] = "Įvestas asmens kodas yra per trumpas.";
        } else if (strlen($_POST["a_k"]) > 11){
            $val_errors["a_k"] = "Įvestas asmens kodas yra per ilgas.";
        } else if (!preg_match('/^[3-6]/', $_POST["a_k"])) {
            $val_errors["a_k"] = "Asmens kodas turi prasidėti skaitmenimis 3, 4, 5 arba 6";
        } else {
            $val_errors["a_k"] = "Įvestas asmens kodas neatitinka lietuviško a.k. formato";
        }
    }
    if (!preg_match('/^[A-Za-z ąĄčČęĘėĖįĮšŠųŲūŪžŽ]{1,100}$/u', $_POST["first_name"])) {
        if (empty($_POST["first_name"])) {
            $val_errors["first_name"] = "Neįvestas keleivio vardas";
        } else {
            $val_errors["first_name"] = "Vardas turi būti sudarytas iš raidžių ir būti neilgesnis nei 100 simbolių";
        }
    }
    if (!preg_match('/^[A-Za-z ąĄčČęĘėĖįĮšŠųŲūŪžŽ]{1,100}$/', $_POST["last_name"])) {
        if (empty($_POST["last_name"])) {
            $val_errors["last_name"] = "Neįvesta keleivio pavardė";
        } else {
            $val_errors["last_name"] = "Pavardė turi būti sudaryta iš raidžių ir būti neilgesnė nei 100 simbolių";
        }
    }
    if (!preg_match('/^[1-9]/', $_POST["price"])) {
        $val_errors["price"] = "Neįvesta skrydžio kaina";
    }
    if (empty($_POST["baggage"])) {
        $val_errors["baggage"] = "Nepasirinktinas bagažo svoris";
    }
    if (!preg_match('/^[\w\s]{50,1000}$/', $_POST["comment"])){
        if (empty($_POST["comment"])) {
            $val_errors["comment"] = "Nepateiktos pastabos. Įrašykite komentarus bei pastabas";
        } else if (strlen($_POST["comment"]) < 50) {
            $val_errors["comment"] = "Pateiktos pastabos/komentarai yra per trumpi";
        } else if (strlen($_POST["comment"]) > 1000) {
            $val_errors["comment"] = "Pateiktos pastabos yra per ilgos";
        }
    }
    return $val_errors;
}