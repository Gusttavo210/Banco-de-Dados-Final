<?php
    require_once("agency.crud.php");

    $id = $_GET['id'];

    if(apagarPost($id))
    {
        header('Location: ../post.list.php?success');
        exit;
    }

    header('Location: ../post.list.php?error');
    exit;