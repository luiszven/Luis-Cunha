<html>

	<title>Fórmula Delay</title>

	<body>

		<form action = "formula_fixa_delay.php" method = 'POST'>

			Base:
		<br><br>
		 		Delay: <input type = 'text' name = "valor_a1"> 
		<br><br>		
       			DEX Base: <input type = 'text' name = "valor_b1"> 
		<br><br>	
       			Item Var 1: <input type = 'text' name = "valor_e1"> 
		<br><br>	
				Item Var 2: <input type = 'text' name = "valor_f1"> 
		<br><br>	
       			Item Var 3: <input type = 'text' name = "valor_g1"> 
		<br><br>
				tem Var 4: <input type = 'text' name = "valor_h1"> 
		<br><br>	
				Item Var 5: <input type = 'text' name = "valor_i1"> 
		<br><br>				
			<input type = "submit" name = 'enviar' value= 'Calcular' >
		</form>

<?php

echo '<br>';

//Variáveis

$delay_fixo = $_POST['valor_a1'];

	echo "O delay é $delay_fixo";

echo '<br>';

$B_DEX = $_POST['valor_b1'];

$DEX_mod_delay = 00.56333333333333;

		$mod_delay_dex = $B_DEX * $DEX_mod_delay; //MODIFICADOR FINAL DE DEX

			$porc_mod_delay_dex = $delay_fixo / 100 * $mod_delay_dex; //MODIFICADOR DE DEX EM SEGUNDOS 

$item_delay_var1 = $_POST['valor_e1'];
$item_delay_var2 = $_POST['valor_f1'];
$item_delay_var3 = $_POST['valor_g1'];
$item_delay_var4 = $_POST['valor_h1'];
$item_delay_var5 = $_POST['valor_i1'];

	$item_delay_var_bonus = $item_delay_var1 + $item_delay_var2 + $item_delay_var3 + $item_delay_var4 + $item_delay_var5; //BÔNUS FINAL DE ITEM CAST VARIÁVEL em %

		$item_mod_bonus_del = $delay_fixo / 100 * $item_delay_var_bonus; //MODIFICADOR FINAL DE VAR ITEM 

			$delay1 = $delay_fixo - $porc_mod_delay_dex - $item_mod_bonus_del;  //RESULTADO DE DELAY 

						if($delay1 > 0) {
								echo 'Delay final é: ', $delay1;
						}
									else {
										echo 'Delay final é zero';
									}

echo '<br>';

print_r($_POST);