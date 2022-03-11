<?php
$login = "Um teste de or '1='1;";
//preg_replace — Execute uma pesquisa de expressão regular e substitua
$resultado = preg_replace('/[^[:alpha:]_]/', '',$login);
echo $resultado;
?>