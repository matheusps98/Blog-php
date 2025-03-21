<?php

include_once("helpers/url.php");
include_once("data/posts.php");
include_once("data/categories.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Codar</title>
    
    <!--ESTILOS DO PROJETO-->
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/styles.css">

    <!--FONTES DO PROJETO-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

</head>
<body>
    <header>
        <a href="<?= $BASE_URL ?>index.php" id="logo">
            <img src="<?= $BASE_URL ?>img/logo.svg" alt="Blog Codar">
            <h1>Blog hora de Codar</h1>
        </a>
        <nav>
            <ul id="navbar">
            <li><a href="<?= $BASE_URL?>index.php">Home</a></li>
            <li><a href="<?= $BASE_URL?>">Categorias</a></li>
            <li><a href="<?= $BASE_URL?>">Sobre</a></li>
            <li><a href="<?= $BASE_URL?>contato.php">Contato</a></li>
            </ul>
        </nav>
    </header>