<?php
require('conection.php');

function checkReferer() {
  $httpArr = parse_url($_SERVER['HTTP_REFERER']);
  return $res = transition($httpArr['path']);
}

function transition($path) {
  $data = $_POST;
  if($path === '/index.php' && $data['type'] === 'delete') {
    deleteData($data['id']);
    return 'index';
  } elseif($path === '/new.php') {
    create($data);
  } elseif($path === '/edit.php'){
    update($data);
  }
}

function create($data) {
  insertDb($data['todo']);
}

function update($data) {
  updateDb($data['id'], $data['todo']);
}

function deleteData($id) {
  deleteDb($id);
}

function detail($id) {
  return getSelectData($id);
}

function index() {
  return $todos = selectAll();
}
?>