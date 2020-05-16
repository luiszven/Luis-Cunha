<html>

	<title>Fórmula Velocidade</title>

	<body>

		<form action = "formula_fixa_velocidade_ataque.php" method = 'POST'>

			Base:
		<br><br>
		 		Peso da Arma: <input type = 'text' name = "valor_a2"> 
		<br><br>		
       			DEX Base: <input type = 'text' name = "valor_b2"> 
		<br><br>	
       			Item Var 1: <input type = 'text' name = "valor_e2"> 
		<br><br>	
				Item Var 2: <input type = 'text' name = "valor_f2"> 
		<br><br>	
       			Item Var 3: <input type = 'text' name = "valor_g2"> 
		<br><br>
				tem Var 4: <input type = 'text' name = "valor_h2"> 
		<br><br>	
				Item Var 5: <input type = 'text' name = "valor_i2"> 
		<br><br>				
			<input type = "submit" name = 'enviar' value= 'Calcular' >
		</form>


<?php


$vel_inicial = 1.20;

$peso_ar = $_POST['valor_a2'];

$B_DEX = $_POST['valor_b2'];

$DEX_vel = 00.105;

	$mod_vel_dex = $B_DEX * $DEX_vel;

		$vel_atk = $vel_inicial + $mod_vel_dex;

$item_vel_var1 = $_POST['valor_e2'];
$item_vel_var2 = $_POST['valor_f2'];
$item_vel_var3 = $_POST['valor_g2'];
$item_vel_var4 = $_POST['valor_h2'];
$item_vel_var5 = $_POST['valor_i2'];

	$bonus_item_vel = $item_vel_var1 + $item_vel_var2 + $item_vel_var3 + $item_vel_var4 + $item_vel_var5;

		$mod_vel_item = $vel_atk / 100 * $bonus_item_vel;

			$vel_atk2 = $vel_atk + $mod_vel_item;

    
    if($peso_ar < 100) {
    	$vel = $vel_atk2 / 100 * 90;
    }
    	elseif($peso_ar > 100 && $peso_ar < 250) {
    		$vel = $vel_atk2 / 100 * 80;
    	}
    		elseif($peso_ar > 250 && $peso_ar < 500) {
    			$vel = $vel_atk2 / 100 * 70;
    		}
    			elseif($peso_ar > 500 && $peso_ar < 700) {
    				$vel = $vel_atk2 / 100 * 60;
    			}
    				elseif($peso_ar > 700 && $peso_ar < 900) {
    					$vel = $vel_atk2 / 100 * 50;
    				}
    					else {
    						$vel = $vel_atk2 / 100 * 30;
    					}
    						echo $vel;

echo '<br>';

print_r($_POST);

/*
$test1 = $vel_atk2 / 100 * 90.00;
$test2 = $vel_atk2 / 100 * 80;
$test3 = $vel_atk2 / 100 * 70;
$test4 = $vel_atk2 / 100 * 60;
$test5 = $vel_atk2 / 100 * 50;
$test6 = $vel_atk2 / 100 * 30;

echo '<br>';
echo $test6	;
echo '<br>';

print_r($_POST);


0-100 = 90
101-250 = 80
251-500 = 70 
501-700 = 60
701-900 = 50
901-* = 30
*/
