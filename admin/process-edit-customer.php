<?php

@session_start();
include('controllers/c_customers.php');
    

    if (isset($_SESSION['admin_id'])) {
        if ($_SESSION['admin_role'] == 1 || $_SESSION['admin_role'] == 2) {
            $customer = new c_customers();
            $customer->handle_edit_customer();
        } else {
            header('location: index.php');
        }
    } else {
        header('location: notfound.php');
    }