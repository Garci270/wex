<?php
/* Smarty version 3.1.39, created on 2021-09-27 15:15:45
  from 'C:\xampp\htdocs\tpeespecial\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61520a51c159c8_36852924',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7bc7264053ccf6fd1af7158e48ab811e585395d8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeespecial\\templates\\header.tpl',
      1 => 1632766516,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61520a51c159c8_36852924 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo BASE_URL;?>
" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
</head>
<div class="container-fluid d-flex justify-content-center align-items-center sticky mt-4 min-nav">
<nav class="navbar navbar-expand-lg navbar-light bg-white">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">WEX</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Inico</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Productos">Categorias</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fas fa-user"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Categorias">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>
<body><?php }
}
