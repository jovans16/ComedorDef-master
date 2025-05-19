<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="<?= base_url('style.css') ?>">
</head>
<body>
    <div class="container">
        <h1 class="title">Registro de Usuario</h1>

        <div class="logo">
            <img src="<?= base_url('pollo1.png') ?>" alt="Logo Pollo" />
        </div>
        
        <div class="form-container">
            <form action="<?= base_url('register') ?>" method="POST">
                <div class="form-label">Nombre</div>
                <input type="text" name="nombre" class="form-input" placeholder="Introduce tu nombre" required>
                
                <div class="form-label">Correo</div>
                <input type="email" name="correo" class="form-input" placeholder="Introduce tu correo" required>
                
                <div class="form-label">Contraseña</div>
                <input type="password" name="contraseña" class="form-input" placeholder="Introduce tu contraseña" required>
                
                <button type="submit" class="formulario-button">Registrar</button>
                <a href="<?= base_url('login') ?>" class="btn">Ya tengo una cuenta</a>

            </form>
        </div>

    </div>
</body>
</html>