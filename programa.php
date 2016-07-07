<?php
// exibe o weekday e dia/mês/ano
echo "Hoje é " . date(l) . " dia " . date('d/m/y') . '<br />';

// exibe hora no formato AM PM
echo " agora são " . date('h:i:s A') . '<br />';

// exemplo: hoje é quarta feira e faltam 3 dias para sábado
echo "Hoje é " . date(l) . ", faltam três dias para " . date('l', strtotime("+3 days")) . '<br />';
