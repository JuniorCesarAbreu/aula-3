<h2>Exercício 4</h2>
<p>Permitir informar até 5 operações para serem realizadas por vez, exibindo o resultado de todas elas de cada operação baseado no operador de junção das operações</p>
<?php
//for,while
//if
//math

/*
$algumaCoisa = fazerAlgumaCoisa(20,30);

var_dump($algumaCoisa);

function fazerAlgumaCoisa($param1, $param2){
  return $param1 + $param2;
}
*/

/*
function fazerAlgumaCoisa($param1, $param2){
  return $param1 + $param2;
}

$function = 'fazerAlgumaCoisa';

$resultado = $function(10, 30);

var_dump($resultado);
*/
?>


<?php

require '../bootstrap.php';

echo '<form method="POST" action="calcular.php">';

// repete o formulario
for ($i=0; $i < 5; $i++) {
    //require 'C:\xampp\htdocs\aula-4\src\view\formulario-operacao.php'; jeito errado

    $path =  __APP_ROOT__.'/src/view/formulario-operacao.php';

    require $path;

    echo "<hr>";
}

echo '<input type="submit" value="Calcular"/>';

//aspas simples
//aspas duplas permite usar variaveis

echo "</form>";

?>
