<?php
require_once 'view/inc/form_validation.php';

if (isset($_POST['print']) && empty(validate())) {
    require_once 'view/ticket.php';
} else {
    require_once 'view/form.php';
}

