<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cálculo IMC</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container mt-3">
  <h2>Cálculo IMC</h2>
  <form method="post" action="ResultadoCalculoIMC.php">
    <div class="mb-3 mt-3">
      <label for="peso">Peso(kg):</label>
      <input type="number" class="form-control" id="peso" name="txtPeso" min="2.4" max="650.0" step="0.1" style="width: 100px" autocomplete="off" required>
    </div>
    <div class="mb-3 mt-3">
      <label for="altura">Altura(m):</label>
      <input type="number" class="form-control" id="altura" name="txtAltura" min="0.50" max="2.50" step="0.01" style="width: 100px" autocomplete="off" required>
    </div> 
    <div>
    <button type="submit" class="btn btn-primary" name="bt_enviar">Calcular IMC</button>
    </div><br>
    <button type="reset" class="btn btn-primary" value="Reset">Reset</button>
  </form>
</div>
</body>
</html>
