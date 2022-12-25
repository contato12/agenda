<?php 

    include_once("config/url.php");

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--bootstrap-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!--font-awesome-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!--css-->
        <link rel="stylesheet" href="<?=$BASE_URL?>css/style.css">
        <title>Agenda de Contatos</title>
    </head>

    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <a class="navbar-brand" href="<?=$BASE_URL?>index.php">
                    <img src="<?=$BASE_URL?>img/logo.svg" alt="Agenda">
                </a>
                <div>
                    <div class="navbar-nav">
                        <a href="<?=$BASE_URL?>index.php" class="nav-link" id="home-link">Agenda</a>
                        <a href="<?=$BASE_URL?>create.php" class="nav-link" id="home-link">Adicionar Contato</a>
                    </div>
                </div>
            </nav>
        </header>