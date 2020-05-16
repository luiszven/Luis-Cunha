<?php

//last number in var is class progress
// 20 is number of study days	
date_default_timezone_set('America/Sao_Paulo');
$var = array(100, date('d'), 20, 60);

$day = $var[1] -6;

$count = (($var[0]/$var[2]) * $day);

$newfunc = (($count / $var[0]) * 95);

	if($var[3] < $count){

$count = (($var[0]/$var[2]) * $day);
	echo 'Deveria estar em: ' . $count . '%<br>';

$att = $count - $var[3];

$count2 = $att / ($var[0]/$var[2]);
	echo 'Você esta atrasado ' . $count2 . ' Dias<br>';

$count3 = ((($count - $var[3]) / (5)) + ($var[0]/$var[2]));
	echo 'Você deve fazer: ' . $count3 . ' % por dia<br>';

$last = $var[2] - $day;
	echo 'Você tem: ' . $last . ' dias restantes para concluir o curso!';
}
if($var[3] < $newfunc){
	echo 'Oi';
}
if($var[3] < $count && $count < $newfunc){
$count4 = $var[3] + $count3;
	echo 'Hoje você deve fazer até a porcentagem de: ' . $count4 . '%<br> Bom estudo!<br>';

//$last = $var[2] - $day;
	//echo 'Você tem: ' . $last . ' dias restantes para concluir o curso!';
					}
					else{
						echo 'Você esta com: ' . $var[3] . '%<br>';
						echo 'Você esta em dia com seus estudos!<br>';

							$count5 = $var[3] / $day;
								echo 'Sua média é de: ' . floor($count5) . '% por dia<br>';

							$med = $var[0] / $var[2];
		   echo "Estipulamos uma meta de: " . $med . '% por dia, com seus: ' . ceil($count5) . '% você esta acima da meta! Continue assim!<br>';
 
							$prev = (($var[0] - $var[3]) / $count5);
								echo 'Pela estimativa você termina o curso em: ' . ceil($prev) . ' dias!';
					}
/*
print_r($var); echo ' var<br>';
print_r($day); echo ' day<br>';
print_r($count); echo ' count%<br>';
print_r($att); echo ' att falta<br>';
print_r($count2); echo ' count2 %<br>';
print_r($count4); echo ' <br>';
*/

?>
