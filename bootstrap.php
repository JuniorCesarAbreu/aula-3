<?php

//define('__APP_ROOT__', __DIR__);

define('__APP_ROOT__', 'C:/xampp/htdocs/aula-3');

// função para retornar o indice
function post($index){

  return $_POST[$index];
  // se nao houver o indice dará erro
}
