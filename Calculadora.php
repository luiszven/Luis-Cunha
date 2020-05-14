<html>

	<title>Calculadora de Gastos</title>

	<body>

		<form action = "Calculadora.php" method = 'POST'>

			Base:

		<br><br>

		 		Salário Bruto: <input type = 'text' name = "valor_a">   <!-- AKI O VAI O SALÁRIO -->
		<br><br>		
		
				Variável: <input type = 'text' name = "valor_b">        <!-- AKI VAI SE A PESSOA TEM REMUNERAÇÃO VARIAVEL -->
		<br><br>	
       	
       			HC: <input type = 'text' name = "valor_c">              <!--AKI VAI SE TEM HORA EXTRA -->
		<br><br>	
				
				Usa Passagem? <input type = 'text' name = 'pass_a'>	Apenas: Sim / Não	


<!-- FUTURAMENTE FAZER O BOTÃO RADIO FUNCIONAR -->


<!--				Usa Passagem? <input type = "radio" name = "info" id = "respostas" value = "s"> Sim  

			    <input type = "radio" name = "info" id = "respostas" value = "n"> Não -->
		<br><br>	

       			Deslocamento Ida: <input type = 'text' name = "valor_d"> KM   <!--AKI VAI O DESLOCAMENTO INICIAL -->

		<br><br>	

       			Deslocamento Volta: <input type = 'text' name = "valor_e"> KM  <!--AKI VAI O DESLOCAMENTO Volta -->

		<br><br>	
				
       			Valor da Gasolina: <input type = 'text' name = "valor_f">    <!--AKI VAI O VALOR DA GASOLINA -->
        
        <br><br>	
				
       			Autonomia do Carro: <input type = 'text' name = "valor_g"> (Quantos KM/l ele faz)    <!--Quantos km por litro ele faz -->

		<br><br>	

				Quantos dias por mês trabalha? <input type = 'text' name = 'valor_dias'> 

		<br><br>	

			<input type = "submit" name = 'enviar' value= 'Calcular' >

		</form>

<?php

//MATRIZES DE VALORES

//$valorpass1 = $_POST['info'];
//$valorpass2 = $_POST['info2'];

$passagem = $_POST['pass_a']; //PASSAGEM CONDICTION

$valordiario = $_POST['valor_dias']; //QNTS DIAS TRABALHA

$valor1 = $_POST['valor_a']; //SALÁRIO
$valor2 = $_POST['valor_b']; //VARIÁVEL
$valor3 = $_POST['valor_c']; //HC
$valor4 = $_POST['valor_d']; //DESLOCAMENTO IDA
$valor5 = $_POST['valor_e']; //DESLOCAMENTO VOLTA
$valor6 = $_POST['valor_f']; //VALOR DA GASOLINA
$valor7 = $_POST['valor_g']; //AUTONOMIA

$porcpass = 06.00; //PASSSAGEM

/*
$inss1 = 1751; 
$inss2 = 2919;
$inss3 = 5839;
$inssvalue1 = 08.00;
$inssvalue2 = 09.00;
$inssvalue3 = 11.00;
*/

$inss = array();
$inss[0] = array('valor' => 1751, 'porc' => 08.00);
$inss[1] = array('valor' => 2919, 'porc' => 09.00);
$inss[2] = array('valor' => 5839, 'porc' => 11.00);

/*
//CALCULADOR O INSS EM CIMA DO SALÁRIO, O RESULTADO RETORNA $calc1 :
			if($valorTotal1 <= $inss[0]['valor']) {
				$calc1 = $valorTotal1 / 100 * $inss[0]['porc']; 
			}
				elseif($valorTotal1 > $inss[0]['valor'] && $valorTotal1 <= $inss[1]['valor']) {
					$calc1 = $valorTotal1 / 100 * $inss[1]['porc'];
				}
					else {
						$calc1 = $valorTotal1 / 100 * $inss[2]['porc'];
					}
					echo '<br>';
					echo '<pre>';
					print_r($inss);
					echo '<br>';
*/


$impr = array();
$impr[0] = array('valor' => 1903, 'porc' => 07.50);
$impr[1] = array('valor' => 2827, 'porc' => 15.00);
$impr[2] = array('valor' => 3752, 'porc' => 22.50);
$impr[3] = array('valor' => 4665, 'porc' => 27.50);


//CALCULAR O IMPOSTO DE RENDA:
/*
	if($valorTotal1 >= $impr[0]['valor'] && $valorTotal1 < $impr[1]['valor']) {
		$cal3 = $valorTotal1 / 100 * $impr[0]['porc'];
	}
		elseif($valorTotal1 >= $impr[1]['valor'] && $valorTotal1 < $impr[2]['valor']) {
			$calc3 = $valorTotal1 / 100 * $impr[1]['porc'];
		}
		elseif($valorTotal1 >= $impr[2]['valor'] && $valorTotal1 < $impr[3]['valor']) {
			$calc3 = $valorTotal1 / 100 * $impr[2]['porc'];
		}
		elseif($valorTotal1 >= $impr[3]['valor']) {
			$calc3 = $valorTotal1 / 100 * $impr[3]['porc'];
		}
			else {
				$calc3 = 0;
			}
*/

/*
$imp1 = 1903;
$imp2 = 2827;
$imp3 = 3752;
$imp4 = 4665;
$imprenda1 = 07.50;
$imprenda2 = 15.00;
$imprenda3 = 22.50;
$imprenda4 = 27.50;
*/



		$valorTotal1 = $valor1 + $valor2 + $valor3;        // AKI É A SOMA DE SALÁRIOS O $
//			echo '$: ', $valorTotal1;

//echo '<br>';
		
		$valorTotal2 = $valor4 + $valor5;                 //AKI É A SOMA DO DESLOCAMENTO 
//			echo 'Desl: ', $valorTotal2;

//echo '<br>';

	if($valorTotal2 <= 0) {
		$valorTotal3 = 0;
	}
	else {
		$valorTotal3 = $valorTotal2 / $valor7;
	}
/*
		$valorTotal3 = $valorTotal2 / $valor7;           //AKI É DESLOCAMENTO POR AUTONOMIA, USADO PARA MULTI PELO VALOR DA GASOLINA 
			if($valorTotal3 = 0) {
				$valorTotal3 = 0;
		}
				else {
					$valorTotal3 = $valorTotal;
				}
*/
//			echo 'Desl por Auto: ', $valorTotal3;

//echo '<br>';

		$valorTotal4 = $valor6 * $valorTotal3;          //AKI MULTI GAS PELO VALOR ANTERIOR
//			echo 'Gas pelo ant: ', $valorTotal4;

//echo '<br>';		

		$valorPassagem = $valor1 /100 * $porcpass;     //VALOR A SER DESCONTADO DA PASSAGEM
//			echo $valorPassagem;




/*
//CALCULADOR O INSS EM CIMA DO SALÁRIO, O RESULTADO RETORNA $calc1 :
			if($valorTotal1 <= $inss1) {
				$calc1 = $valorTotal1 / 100 * $inssvalue1; 
			}
				elseif($valorTotal1 > $inss1 && $valorTotal1 <= $inss2) {
					$calc1 = $valorTotal1 / 100 * $inssvalue2;
				}
					else {
						$calc1 = $valorTotal1 / 100 * $inssvalue3;
					}
*/

/*
//CALCULAR O IMPOSTO DE RENDA:

	if($valorTotal1 >= $imp1 && $valorTotal1 < $imp2) {
		$cal3 = $valorTotal1 / 100 * $imprenda1;
	}
		elseif($valorTotal1 >= $imp2 && $valorTotal1 < $imp3) {
			$calc3 = $valorTotal1 / 100 * $imprenda2;
		}
		elseif($valorTotal1 >= $imp3 && $valorTotal1 < $imp4) {
			$calc3 = $valorTotal1 / 100 * $imprenda3;
		}
		elseif($valorTotal1 >= $imp4) {
			$calc3 = $valorTotal1 / 100 * $imprenda4;
		}
			else {
				$calc3 = 0;
			}



//echo 'O valor do imposto de renda é: ', $calc3; 
*/

//CALCULADOR O INSS EM CIMA DO SALÁRIO, O RESULTADO RETORNA $calc1 :
			if($valorTotal1 <= $inss[0]['valor']) {
				$calc1 = $valorTotal1 / 100 * $inss[0]['porc']; 
			}
				elseif($valorTotal1 > $inss[0]['valor'] && $valorTotal1 <= $inss[1]['valor']) {
					$calc1 = $valorTotal1 / 100 * $inss[1]['porc'];
				}
					else {
						$calc1 = $valorTotal1 / 100 * $inss[2]['porc'];
					}
					echo '<br>';
					echo '<pre>';
					print_r($inss);
					echo '<br>';


	if($valorTotal1 >= $impr[0]['valor'] && $valorTotal1 < $impr[1]['valor']) {
		$cal3 = $valorTotal1 / 100 * $impr[0]['porc'];
	}
		elseif($valorTotal1 >= $impr[1]['valor'] && $valorTotal1 < $impr[2]['valor']) {
			$calc3 = $valorTotal1 / 100 * $impr[1]['porc'];
		}
		elseif($valorTotal1 >= $impr[2]['valor'] && $valorTotal1 < $impr[3]['valor']) {
			$calc3 = $valorTotal1 / 100 * $impr[2]['porc'];
		}
		elseif($valorTotal1 >= $impr[3]['valor']) {
			$calc3 = $valorTotal1 / 100 * $impr[3]['porc'];
		}
			else {
				$calc3 = 0;
			}
			echo '<br>';
			echo '<pre>';
			print_r($impr);
			echo '<br>';


//CALCULAR A PASSAGEM:

    if($passagem == 'Sim') {
    	$calc4 = $valorTotal1 / 100 * $porcpass;
    }
    	elseif($passagem == 'Não') {
    		$calc4 = '0'	;
    	}
    		else {
 				$calc4 = 'Zero';
    		}

$valorFinalPass = $valorTotal4 * $valordiario;

//echo 'Quanto é a passagem? ', $calc4;

$moneyliq = $valorTotal1 - $calc1 - $calc3 - $calc4 - $valorTotal4;

echo 'Seu salário bruto é: ', $valorTotal1;

echo '<br>';

echo 'Seu custo com INSS é: ', $calc1;

echo '<br>';

echo 'Seu Imposto de Renda é: ', $calc3;

echo '<br>';

echo 'Seu custo com passagem é: ', $calc4;

echo '<br>';

echo 'Seu custo com transporte própio é: ', $valorFinalPass;

echo '<br>';

echo 'Desconto total (INSS + IP): ', ($calc1 + $calc3); 

echo '<br>';

echo 'Seu salário líquido é: ', $moneyliq;



//TESTE
//echo $calc1;
echo '<pre>';
print_r($_POST);					

echo '<pre>';

var_dump($_POST);















/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*
if(isset($_POST['info'])) {
	var_dump('escolheu ' . $_POST['info']);
}
	else {
		var_dump('Não escolheu');
	}
*/

//$_POST['info'] = ( isset($_POST['info']) ) ? $_POST['info'] : null;


/*if(isset($_POST['info'])) {
	var_dump($calc2 = $valor1 / 100 * $porcpass);
}
	else {
		var_dump($calc2 = 0);
	}


if($_POST['info'] = 's') {
	$calc2 = $valor1 / 100 * $porcpass;
}
elseif($_POST['info'] = 'n') {
	$calc2 = 0;
}
else {
	$calc2 = 0;
}

echo 'O valor é: ', $calc2; 

*/

/*     TALVEZ NÃO SEJA USADO PARA A PASSAGEM
if($valorpass1 == 'info') {
	$calc2 = $valor1 / 100 * $porcpass;
}
else {
	$calc2 = 0;
}
echo 'Passagem: ', $calc2;
*/
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



/*
HC+SALARIO+VARIAVEL = $ > -PASSAGEM -DESLOCAMENTO - INSS - IMPOSTO DE RENDA = SALARIO LIQUIDO E SALARIO FINAL 

INSS
0-1751 = 8%
1752-2919 = 9%
2920-5839 = 11%

PASSAGEM 6%

IMPOSTO DE RENDA
1903-2826 = 7,5%
2827-3751 = 15%
3752-4664 = 22,5%
4665 INF = 27,5%

//INICIO DO TESTE
/*
		echo $valor1;
	echo '<br>';
		echo $valor2;
	echo '<br>';
		echo $valor3;
	echo '<br>';
		echo $valor4;
	echo '<br>';
		echo $valor5;
	echo '<br>';
		echo $valor6;
	echo '<br>';
		echo $valor7;
*/
//FIM DO TESTE
























