<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AVICOLA - Inicio de Sesión</title>
    <link rel="stylesheet" href="<?= base_url('login.css') ?>">
</head>
<body>
    <div class="container">
        <h1 class="title">AVICOLA</h1>
        
        <div class="logo">
             <!--<img src="<?= base_url('images/pollo1.png') ?>" alt="" /> -->
        </div>

        <div class="form-container">
            <form action="<?= site_url('login') ?>" method="POST">
                <input type="email" name="correo" class="form-input" placeholder="Correo" required>
                
                <input type="password" name="contraseña" class="form-input" placeholder="Contraseña" required>
                
                <button type="submit" class="formulario-button">Iniciar Sesión</button>
            </form>
            
            <?php if(session()->getFlashdata('fail')): ?>
                <div class="alert alert-danger"><?= session()->getFlashdata('fail') ?></div>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>