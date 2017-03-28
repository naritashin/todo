<?php
require('conection.php');

function create($data) {
  insertDb($data['todo']);
}
?>