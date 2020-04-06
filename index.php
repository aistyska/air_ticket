<?php

if (isset($_POST['print'])) {
    require_once 'view/ticket.php';
} else {
    require_once 'view/form.php';
}

