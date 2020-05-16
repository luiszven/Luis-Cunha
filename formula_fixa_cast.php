<html>

	<title>Fórmula Cast</title>

	<body>

		<form action = "formula_fixa_cast.php" method = 'POST'>

			Base:
		<br><br>
		 		Cast Fixo: <input type = 'text' name = "valor_a"> 
		<br><br>		
				Cast Variável: <input type = 'text' name = "valor_b"> 
		<br><br>	
       			INT Base: <input type = 'text' name = "valor_c">            
		<br><br>	
       			DEX Base: <input type = 'text' name = "valor_d"> 
		<br><br>	
       			Item Var 1: <input type = 'text' name = "valor_e"> 
		<br><br>	
				Item Var 2: <input type = 'text' name = "valor_f"> 
		<br><br>	
       			Item Var 3: <input type = 'text' name = "valor_g"> 
		<br><br>
				tem Var 4: <input type = 'text' name = "valor_h"> 
		<br><br>	
				Item Var 5: <input type = 'text' name = "valor_i"> 
		<br><br>				
       			Item Fix 1: <input type = 'text' name = "valor_j">
		<br><br>				
       			Item Fix 2: <input type = 'text' name = "valor_k">
		<br><br>				
       			Item Fix 3: <input type = 'text' name = "valor_l">
		<br><br>				
       			Item Fix 4: <input type = 'text' name = "valor_m">
		<br><br>				
       			Item Fix 5: <input type = 'text' name = "valor_n"> 	
		<br><br>	
			<input type = "submit" name = 'enviar' value= 'Calcular' >
		</form>

<?php

echo '<br>';

//Variáveis

$cast_fixo = $_POST['valor_a'];
$cast_var = $_POST['valor_b'];

	echo "O cast fixo é $cast_fixo e o cast variável é $cast_var";

echo '<br>';

		$cast = $cast_fixo + $cast_var; //SOMA TOTAL DE CAST

			echo 'O cast total é: ', $cast;

echo '<br>';

$B_INT = $_POST['valor_c'];

$B_DEX = $_POST['valor_d'];

$INT_mod_cast = 00.27;

		$final_mod_cast_int = $B_INT * $INT_mod_cast; //MODIFICADOR FINAL DE INTELIGÊNCIA em %

		$mod_cast_int = $cast_var / 100 * $final_mod_cast_int; //MODIFICADOR DE INT EM SEGUNDOS

$DEX_mod_cast = 00.56333333333333;

		$final_mod_cast_dex = $B_DEX * $DEX_mod_cast; //MODIFICADOR FINAL DE DEX

		$mod_cast_dex = $cast_var / 100 * $final_mod_cast_dex; //MODIFICADOR DE DEX EM SEGUNDOS 

$item_cast_var1 = $_POST['valor_e'];
$item_cast_var2 = $_POST['valor_f'];
$item_cast_var3 = $_POST['valor_g'];
$item_cast_var4 = $_POST['valor_h'];
$item_cast_var5 = $_POST['valor_i'];

	$item_cast_var_bonus = $item_cast_var1 + $item_cast_var2 + $item_cast_var3 + $item_cast_var4 + $item_cast_var5; //BÔNUS FINAL DE ITEM CAST VARIÁVEL em %

	$item_mod_bonus_var = $cast_var / 100 * $item_cast_var_bonus; //MODIFICADOR FINAL DE VAR ITEM 

$item_cast_fix1 = $_POST['valor_j'];
$item_cast_fix2 = $_POST['valor_k'];
$item_cast_fix3 = $_POST['valor_l'];
$item_cast_fix4 = $_POST['valor_m'];
$item_cast_fix5 = $_POST['valor_n'];

	$item_cast_fix_bonus = $item_cast_fix1 + $item_cast_fix2 + $item_cast_fix3 + $item_cast_fix4 + $item_cast_fix5; //BÔNUS FINAL DE ITEM CAST FIXO

	$item_mod_bonus_fix = $cast_fixo / 100 * $item_cast_fix_bonus; //MODIFICADOR FINAL DE FIX ITEM 

		$cast1 = $cast_var - $mod_cast_dex - $mod_cast_int - $item_mod_bonus_var;  //RESULTADO DE CAST VARIÁVEL 

		$cast2 = $cast_fixo - $item_mod_bonus_fix; //RESULTADO DE CAST FIXO 

			$cast_final = $cast1 + $cast2;

					if($cast1 > 0 && $cast2 > 0) {
							echo 'Cast final é: ', $cast_final;
					}
						elseif($cast1 < 0 && $cast2 > 0) {
							echo 'Cast final é: ', $cast2;
						}
							elseif($cast1 > 0 && $cast2 < 0) {
								echo 'Cast final é: ', $cast1;
							}
								else {
									echo 'Cast final é zero';
								}

echo '<br>';

print_r($_POST);


























































