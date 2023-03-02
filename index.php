<?php
require_once 'header.php';
require_once 'functions.php';

$items = getItems();

if (count($items) > 0) {
    echo json_encode($items);
} else {
    $error = array('message' => 'No items found.');
    echo json_encode($error);
}
?>