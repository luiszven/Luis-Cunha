<?php

//TESTE DE CAST


$c_fixo = 4; //sempre segundo. 

$c_var = 6; //sempre segundo.

$cast = $c_fixo + $c_var;


//var_dump($cast);


print_r($c_var);
echo ' fixo';

echo '<br>';

print_r($c_fixo);
echo ' variavel';

echo '<br>';

echo $cast, ' cast total';

$INT_mod = 00.27;

$INT = 120;

$mod_cast = $INT * $INT_mod;

echo '<br>';

echo $mod_cast, ' atb x porcento';

echo '<br>';

$mod_cast2 = $c_var / 100 * $mod_cast;

$cast2 = $c_fixo + ($c_var - $mod_cast2);

echo $cast2, ' cast final';

$resultado = $cast2 - $cast;

echo '<br>';

echo $resultado, ' tempo descontado';

//EQUIPAMENTOS

$item_1_var = 30.00;
$item_2_var = 20.00;
$item_3_var = 15.00;

$item_var = $item_1_var + $item_2_var + $item_3_var;

echo '<br>';

echo $item_var, ' Modificador por item var';

$mod_cast_item = $c_var / 100 * $item_var;

$mod_item = ($c_var - $mod_cast_item - $mod_cast2);

$cast3 = $c_fixo + $mod_item;

echo '<br>';

echo $cast3, ' Resultado item + Atb int';

echo '<br>';

$var_item = $c_var - $mod_cast_item;

echo -$mod_cast_item, ' Mod por item result'; 

//FIXO

$item_1_fixo = 70.00;
$item_2_fixo = 30.00;

$item_fixo = ($item_2_fixo + $item_1_fixo) / 2;

echo '<br>';

$mod_cast_fixo = $c_fixo / 100 * $item_fixo;

echo $item_fixo, ' Mod % fixa';

echo '<br>';

echo -$mod_cast_fixo, ' Res fixo'; 

echo '<br>';

$cast4 = ($c_fixo - $mod_cast_fixo) + $mod_item;

echo $cast4, ' Cast final';

$reduc = $cast - $cast4;

echo '<br>';

echo -$reduc, ' Redução total de cast';

echo '<br>';

$reduc_porc = ($reduc / $cast) * 100;

echo $reduc_porc, '% Porcentagem total de redução';

//DEX

$DEX_mod = 00.56333333333333;

$DEX = 120;

$mod_cast_DEX = $DEX * $DEX_mod;

echo '<br>';

echo $mod_cast_DEX, ' atb DEX x porcento';

echo '<br>';

$mod_cast3 = $c_var / 100 * $mod_cast_DEX;

$cast5 = $c_fixo + ($c_var - $mod_cast3);

echo $cast5, ' cast final';

$resultado3 = $cast5 - $cast;

echo '<br>';

echo $resultado3, ' tempo descontado';

echo '<br>';

echo $resultado;

echo '<br>';

$desc = $resultado3 + $resultado;

echo $desc;















