<?php
    require_once("agency.crud.php");

    $postitle = $_POST['inputTitulo'];
    $subtitle = $_POST['inputSubtitulo'];
    $data = $_POST['inputData'];

    if(atualizarPost(,$postitle, $subtitle,  $data))
    {
        header('Location: ../index.php');
        exit;
    }

    header('Location: ../post.form.php?error=true');
    exit;