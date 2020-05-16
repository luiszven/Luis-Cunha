<html>

	<title>Produtividade de estudos</title>

	<body>

		<form action = "Produtividade_compass.php" method = 'POST'>

		 		Progresso: <input type = 'text' name = "valor_a">

			<input type = "submit" name = 'enviar' value= 'Verificar'>

		</form>

<?php

@$prod = $_POST['valor_a'];

date_default_timezone_set('America/Sao_Paulo');
$var = array(100, date('d'), 10); //PORC, DIA HOJE, META DIA

$day = $var[1]; //DIA ATUAL

$count = (($var[0]/$var[2]) * $day); //100/20*DIA HJ = % QUE DEVERIA ESTAR

$newfunc = (($count / $var[0]) * 90); //MÉDIA DE 90% DA META

	if($prod == $count){
			echo 'Você esta com: ' . $prod . '% do curso concluído.<br>';
			echo 'Você esta em dia com seus estudos!<br>';

					$count5 = $prod / $day;
						echo 'Sua média é de: ' . floor($count5) . '% por dia.<br>';

					$med = $var[0] / $var[2];
		    echo "Estipulamos uma meta de: " . $med . '% por dia, com seus: ' . ceil($count5) . '% você esta dentro da meta! Continue assim!<br>';
 
					$prev = (($var[0] - $prod) / $count5);
						echo 'Pela estimativa você termina o curso em: ' . ceil($prev) . ' dias!<br>';

			echo 'Bons estudos!<br>';
	}

	elseif($prod > $count && $prod < $var[0]){
			echo 'Você esta com: ' . $prod . '% do curso concluído.<br>';
			echo 'Você esta em dia com seus estudos!<br>';

					$count5 = $prod / $day;
						echo 'Sua média é de: ' . floor($count5) . '% por dia.<br>';

					$med = $var[0] / $var[2];
		    echo "Estipulamos uma meta de: " . $med . '% por dia, com seus: ' . ceil($count5) . '% você esta acima da meta, continue assim!<br>';
 
					$prev = (($var[0] - $prod) / $count5);
						echo 'Pela estimativa você termina o curso em: ' . ceil($prev) . ' dias!<br>';

			echo 'Bons estudos!<br>';
	}

	elseif($prod < $count && $prod < $newfunc){

			echo 'Você esta com: ' . $prod . '% do curso concluído.<br>';

				$count = (($var[0]/$var[2]) * $day);
					echo 'Deveria estar em: ' .ceil($count). '%<br>';

$att = $count - $prod;
$last = $var[2] - $day;

				$count2 = $att / ($var[0]/$var[2]);
					echo 'Você esta atrasado ' . ceil($count2) . ' dias.<br>';

				$prev2 = ($prod / $day); 
					echo 'Sua produtividade esta em: ' . floor($prev2) . '% por dia.<br>';

				$count3 = ((($count - $prod) / $last) + ($var[0]/$var[2]));
					echo 'Você deve fazer: ' . ceil($count3) . ' % por dia.<br>';

				$count4 = $prod + $count3;
					echo 'Hoje você deve fazer até a porcentagem de: ' . ceil($count4) . '%<br>';

				$last = ($var[2] - $day);
					echo 'Você tem: ' . $last . ' dias restantes para concluir o curso!<br>';

				@$prev3 = (($var[0] - $prod) / $prev2);	
					echo 'Nesta média você vai terminar o curso em: ' . ceil($prev3) . ' dias, não atingindo a meta!<br>';	

			echo  'Bons estudos!<br>';
	}

	elseif($prod < $count && $prod > $newfunc){

$last = ($var[2] - $day);
		
			echo 'Você esta com ' . $prod . '% do curso conlcuído, é um pouco abaixo do previsto!<br>';

				$prev2 = ($prod / $day); 
					echo 'Sua produtividade esta em: ' . floor($prev2) . '% por dia.<br>';

				$count3 = ((($count - $prod) / $last) + ($var[0]/$var[2]));
					echo 'Você deve fazer: ' . ceil($count3) . ' % por dia.<br>';

			echo 'Hoje você deve fazer até a porcentagem de: ' . $count . '%<br>';

				$last = ($var[2] - $day);
					echo 'Você tem: ' . $last . ' dias restantes para concluir o curso!<br>';

				$prev3 = (($var[0] - $prod) / $prev2);	
					echo 'Nesta média você vai terminar o curso em: ' . ceil($prev3) . ' dias, não atingindo a meta!<br>';	

			echo 'Bons estudos!<br>';
	}
	else{
		echo 'Você concluiu o curso, parabéns!';
	}