<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/models/usuarioC.php';

try {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    Usuario::logar($email, $senha);
} catch (PDOException $e) {
    echo $e->getMessage();
}