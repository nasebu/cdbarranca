<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de la Variable</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card text-center">
                    <div class="card-header bg-primary text-white">
                        <h4>Resultado de tu Variable</h4>
                    </div>
                    <div class="card-body">
                        <?php
                        // ALMACENAMIENTO DE VARIABLES
                        $tipoCargo = $_POST["tipoCargo"];
                        $porcentajeVariable = $_POST["porcentajeVariable"];
                        $salarioVariable = 0;

                        switch ($porcentajeVariable) {
                            case "30":
                                $porcentajeVariable = 30;
                                break;
                            case "40":
                                $porcentajeVariable = 40;
                                break;
                            case "60":
                                $porcentajeVariable = 60;
                                break;
                            case "70":
                                $porcentajeVariable = 70;
                                break;
                            case "100":
                                $porcentajeVariable = 100;
                                break;
                        }

                        switch ($tipoCargo) {
                            case "1":
                                $tipoCargo = "Auxiliar de reparto";
                                $salarioVariable = (67932 * $porcentajeVariable) / 100;
                                break;
                            case "2":
                                $tipoCargo = "Conductor";
                                $salarioVariable = (74433 * $porcentajeVariable) / 100;
                                break;
                            case "3":
                                $tipoCargo = "Responsable de reparto";
                                $salarioVariable = (79958 * $porcentajeVariable) / 100;
                                break;
                            case "4":
                                $tipoCargo = "Líder de ruta";
                                $salarioVariable = (86459 * $porcentajeVariable) / 100;
                                break;
                        }

                        $formatoMoneda = new NumberFormatter('es_CO', NumberFormatter::CURRENCY);
                        $formato_moneda = $formatoMoneda->formatCurrency($salarioVariable, 'COP');
                        ?>
                        <h5>Hola, <?php echo $tipoCargo; ?></h5>
                        <p class="lead">Has ganado <strong><?php echo $formato_moneda; ?></strong> con base en un porcentaje de cumplimiento del <?php echo $porcentajeVariable; ?>%.</p>
                    </div>
                    <div class="card-footer">
                        <a href="index.html" class="btn btn-primary">Volver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
