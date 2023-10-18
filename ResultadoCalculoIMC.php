<!DOCTYPE html>
<html lang="pt-BR">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
 <title>Resultado do Cálculo IMC</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-4 bg-dark text-white">
				<h2>
					<?php
					
					echo '<div class="text-white bg-dark"><h1>Resultado</h1></div>';
					echo '<table class="table table-striped">';
					

					if(isset($_POST['bt_enviar'])){
							$peso = $_POST['txtPeso'];
							$altura = $_POST['txtAltura'];
							
						// ARRAY DE ERROS
						
						$erros = [];
						
						// SANITIZAR
						
						$peso = filter_input(INPUT_POST, 'txtPeso', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
						$altura = filter_input(INPUT_POST, 'txtAltura', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
						

						if(!filter_var($peso, FILTER_VALIDATE_FLOAT)) {
							$erros[] = "digitar apenas números!";
						}
						
						if(!filter_var($altura, FILTER_VALIDATE_FLOAT)) {
							$erros[] = "digitar apenas números!";
						}
						
						if(!empty($erros)) {
							foreach ($erros as $erro) {
								echo "<li> $erro </li>";
							}
						} else {
							echo '<tr>';
							echo '<td>Dados informados: </td>';
							echo '</tr>';
						}
					}
					
					echo '<td>Peso: '.$peso. ' kg</td>';
					echo '</tr>';
					echo '<tr>';
					echo '<td>Altura: '.$altura. ' m</td>';
					echo '</tr>';

					$calculoimc = ($peso/($altura*$altura));
					$calculoimc = number_format($calculoimc, 2, '.', '');
					$resultado; 

					echo '<tr>';
					echo '<td>';
					echo "IMC: ".$calculoimc." Kg/m²".'</td>';
					echo '</tr>';
					
					if($calculoimc < 17)
					{
					$resultado = "Muito abaixo do peso";
					echo '<tr>';
					echo '<td class="text-primary">'.$resultado.'</td>';
					echo '</tr>';
					}
					elseif($calculoimc >= 17 && $calculoimc <= 18.49)
					{
					$resultado = "Abaixo do peso";
					echo '<tr>';
					echo '<td class="text-info">'.$resultado.'</td>';
					echo '</tr>';
					}
					elseif($calculoimc >= 18.5 && $calculoimc <= 24.99)
					{
					$resultado = "Peso normal";
					echo '<tr>';
					echo '<td class="text-success">'.$resultado.'</td>';
					echo '</tr>';
					}
					elseif($calculoimc >= 24 && $calculoimc <= 29.99)
					{
					$resultado = "Acima do peso";
					echo '<tr>';
					echo '<td class="text-warning">'.$resultado.'</td>';
					echo '</tr>';
					}
					elseif($calculoimc >= 30 && $calculoimc <= 34.99)
					{
					$resultado = "Obesidade grau I";
					echo '<tr>';
					echo '<td class="text-warning">'.$resultado.'</td>';
					echo '</tr>';
					}
					elseif($calculoimc >= 35 && $calculoimc <= 39.99)
					{
					$resultado = "Obesidade grau II (severa)";
					echo '<tr>';
					echo '<td class="text-danger">'.$resultado.'</td>';
					echo '</tr>';
					}
					else
					{
					$resultado = "Obesidade grau III (mórbida)";
					echo '<tr>';
					echo '<td class="text-danger">'.$resultado.'</td>';
					echo '</tr>';
					}
					echo '</table>';
					?>
					<div class="col text-center">
						<button class="btn btn-primary col text-center " onclick="history.back()">Voltar</button>
					</div>
				</h2> 	
			</div> 
		</div>	
	</div>
</body>
</html>
