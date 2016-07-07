<?php
echo "Hoje é " . date(l) . " dia " . date('d/m/y') . '<br />';
echo " agora são " . date('h:i:s A') . '<br />';
echo "Hoje é " . date(l) . ", faltam três dias para " . date('l', strtotime("+3 days")) . '<br />';
