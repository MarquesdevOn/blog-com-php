<?php
/*
Esse código cria uma URL base para o site, que é como um endereço "raiz" que aponta para o início do site. Esse endereço base pode ser usado para construir links para outras páginas ou recursos do site sem precisar escrever o endereço completo cada vez.
*/

$BASE_URL = "http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER['REQUEST_URI'] . '?') . '/';
