<!-- PHP PARA INSERTAR LOS REPORTES DE CADA USUARIO -->

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Luz Alerta - Historial de Emergencias y Estadísticas">
    <title>Historial de Emergencias - Luz Alerta</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body>
    <header>
        <!-- NAVBAR AJUSTADO -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">Luz Alerta</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="../2. Inicios/">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/1. PRINCIPAL/6. Informaciones/QuieneSomos.html">¿Quiénes somos?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container mt-5">
        <section>
            <h3>Últimas 5 Emergencias Registradas</h3>
            <input type="text" id="searchInput" class="form-control" placeholder="Buscar emergencia..."
                onkeyup="filterEmergencies()">
            <ul id="emergencyList" class="list-group mt-3">
                <li class="list-group-item">Apagón en el sector norte - 3 de septiembre, 2024</li>
                <li class="list-group-item">Corte de energía en el centro - 1 de septiembre, 2024</li>
                <li class="list-group-item">Falla en transformador zona sur - 28 de agosto, 2024</li>
                <li class="list-group-item">Problemas en la línea de transmisión - 25 de agosto, 2024</li>
                <li class="list-group-item">Interrupción programada - 20 de agosto, 2024</li>
            </ul>
        </section>

        <section class="mt-4">
            <h3>Estadísticas de Emergencias</h3>
            <p>A continuación, puedes ver un gráfico con la cantidad de emergencias por sector en el último mes:</p>

            <!-- Aquí irá el gráfico de barras -->
            <canvas id="emergencyChart" width="400" height="200"></canvas>

            <script>
                // Configuración del gráfico de barras usando Chart.js
                var ctx = document.getElementById('emergencyChart').getContext('2d');
                var emergencyChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ['Norte', 'Centro', 'Sur', 'Este', 'Oeste'], // Etiquetas para los sectores
                        datasets: [{
                            label: 'Número de Emergencias',
                            data: [5, 3, 7, 2, 4], // Datos de ejemplo para cada sector
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            </script>
        </section>
    </main>

    <footer class="text-center mt-5">
        <p>© 2024 Luz Alerta. Todos los derechos reservados.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>