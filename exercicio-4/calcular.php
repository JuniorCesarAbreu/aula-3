Calculando
<pre>

<?php

  //var_dump($_POST); ; acessar atraves do POST nao e ideal pois expóem os dados

  $matematica = new Matematica;

  require "../bootstrap.php";

  //var_dump(post('operador'));
  //var_dump(post('valor-1'));
  //var_dump(post('valor-2'));

  $operadores = post('operador');
  $valores_1 = post('valor-1');
  $valores_2 = post('valor-2');

  /*for ($i=0; $i < count($operadores); $i++) { // count estima o tamanho do array
    # code...
  }*/

  foreach ($operadores as $index => $operador) {
    //var_dump([$index, $operador]);

    $valor_1 = null;
    $valor_2 = null;
    $resultado = 0;

    // isset: verifica se há algum valor na posicao do array para evitar acesso fora do array, evitando warnings
    if (isset($valores_1[$index])) {
      $valor_1 = (int) $valores_1[$index]; //typecast
    }

    if (isset($valores_2[$index])) {
      $valor_2 = (int) $valores_2[$index];
    }

    if (isset($valor_1) and isset($valor_2)) { // pode usar && = and
      $resultado =  calcular($valor_1, $valor_2, $operador);
    }

    var_dump($resultado);
  }

/**
 *
 */
class Matematica
{
  public function calcular($valor_1, $valor_2, $operador)
  {
      $resultado = 0;

/*      if ($operador === '+') {
          $resultado = $valor1 + $valor2;
      } else {
          $resultado = $valor1 - $valor2;
      }
      */

      switch ($operador) {
        case '+':
          $resultado = $valor_1 + $valor_2;
          break;
        case '-':
          $resultado = $valor_1 - $valor_2;
          break;
        case '*':
          $resultado = $valor_1 * $valor_2;
          break;
        case '/':
          $resultado = $valor_1 / $valor_2;
          break;
      }

      return $resultado;
  }

}
