<?php

  function setaccio($n_primi){
    return range(2, $n_primi);
  }

  function get_primo_indice($old_n, $matrix){ #cerco il prossimo valore non eliminato
    for ($indice = $old_n + 1; $indice < count($matrix); $indice++ ){
      if($matrix[$indice] != 0){

        return $indice;
      }
    }
    return 0; #non ci sono più valori da calcolare ....
  }

  function setaccia($n_primo, &$matrix){#elimino tutti i multipli di n
    for ($indice = $n_primo + 1 ; $indice < count($matrix) ; $indice++ ){
      if ($matrix[$indice] % $matrix[$n_primo] == 0){
        $matrix[$indice] = 0;
      }
    }
    return 0; #settacciato i multipli di n ...
  }

  function clear( $deleted_value, &$matrix){
    unset($matrix[$deleted_value] );#elimina i valori setacciati
  }

  #begin main
  define('DIM_SETTACIO', 100);
  $crivello = setaccio(DIM_SETTACIO);
  $n = 0;
  do{
    setaccia( $n, $crivello);
  }while($n = get_primo_indice($n, $crivello) );


  while ( $i = array_search(0, $crivello) ){
    clear($i, $crivello);
  }

  print_r( $crivello);

?>
