<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AVICOLA</title>
    <link rel="stylesheet" href="<?= base_url('Reportes.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <!-- Barra lateral -->
    <input type="checkbox" id="check">
    <label for="check">
        <i class="fas fa-bars" id="btn"></i>
        <i class="fas fa-times" id="cancel"></i>
    </label>

    <div class="sidebar">
        <!-- Seccion para mostrar el usuario en la barra -->
        <div class="user-info">
            <?php if(session()->has('usuario_nombre')): ?>
                <p>¡Bienvenido!</p>
                <p class="username"><?= session()->get('usuario_nombre') ?></p>
            <?php else: ?>
                <p>¡Bienvenido!</p>
                <p class="username">Usuario</p>
            <?php endif; ?>
        </div>
        
        <ul>
            <li><a href="<?= base_url('/PagPrincipal') ?>">
                    <img src="<?= base_url('/pollo1.png') ?>" alt="PagPrincipal" class="menu-icon">Gestión de aves
                </a></li>
            <li><a href="<?= base_url('/Reportes') ?>">
                <img src="<?= base_url('/pollo1.png') ?>" class="menu-icon">Reportes
            </a></li>
            <li><a href="<?= base_url('/manual') ?>">
                <img src="<?= base_url('/pollo1.png') ?>" class="menu-icon">Manual del dispositivo
            </a></li>
            <li><a href="<?= base_url('/ayuda') ?>">
                <img src="<?= base_url('/pollo1.png') ?>" class="menu-icon">Ayuda
            </a></li>
        </ul>
        <div class="contacto-info">
            <img src="<?= base_url('/pollo1.png') ?>" class="menu-icons">
            <p>Linea de contacto</p>
            <p>2311442661</p>
        </div>
        <!-- Botón de cierre de sesión -->
        <div class="logout-section">
            <a href="<?= base_url('/logout') ?>" class="logout-btn">
                <i class="fas fa-sign-out-alt"></i> Cerrar sesión
            </a>
        </div>
    </div>

    <!-- Contenido Principal -->
    <div style="margin-left: 270px; padding: 20px;">
        <h2>Reporte de Alimentación Diaria</h2>

        <!-- Tabla -->
        <table>
            <thead>
                <tr>
                    <th>Fecha de Alimentación</th>
                    <th>Veces Alimentado</th>
                    <th>Hora de Última Alimentación</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($Reportes as $registro): ?>
                    <tr>
                        <td><?= esc($registro['fechaAlimentacion']) ?></td>
                        <td><?= esc($registro['VecesAlimentado']) ?></td>
                        <td><?= esc($registro['horaAlimentado']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <!-- Gráfica -->
        <h3>Gráfica de Veces Alimentado por Fecha</h3>
        <canvas id="graficoReporte" width="600" height="175"></canvas>

        <script>
            const registros = <?= json_encode($Reportes) ?>;

            // Agrupar por fecha
            const agrupados = {};

            registros.forEach(item => {
                const fecha = item.fechaAlimentacion;
                const veces = parseInt(item.VecesAlimentado);

                if (!agrupados[fecha]) {
                    agrupados[fecha] = 0;
                }
                agrupados[fecha] += veces;
            });

            const labels = Object.keys(agrupados);
            const cantidades = Object.values(agrupados);

            const ctx = document.getElementById('graficoReporte').getContext('2d');
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Veces alimentado por fecha',
                        data: cantidades,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.6)',
                            'rgba(54, 162, 235, 0.6)',
                            'rgba(255, 206, 86, 0.6)',
                            'rgba(75, 192, 192, 0.6)',
                            'rgba(153, 102, 255, 0.6)',
                            'rgba(255, 159, 64, 0.6)',
                            'rgba(199, 199, 199, 0.6)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(199, 199, 199, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        title: {
                            display: true,
                            text: 'Frecuencia de Alimentación por Día'
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            title: {
                                display: true,
                                text: 'Veces Alimentado'
                            }
                        },
                        x: {
                            title: {
                                display: true,
                                text: 'Fecha'
                            }
                        }
                    }
                }
            });
        </script>
    </div>
</body>
</html>
