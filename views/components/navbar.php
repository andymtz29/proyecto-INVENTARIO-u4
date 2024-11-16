<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suits - Navegación</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Barra de navegación moderna */
        .navbar-custom {
            background-color: rgba(0, 0, 0, 0.85); /* Fondo oscuro elegante */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(5px);
        }

        .navbar-brand {
            color: #fff !important;
            font-weight: bold;
            font-size: 1.6rem;
            transition: color 0.3s ease;
        }

        .navbar-brand:hover {
            color: #00bcd4 !important;
        }

        .nav-link {
            color: #fff !important;
            transition: color 0.3s ease, transform 0.3s ease;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .nav-link:hover {
            color: #00bcd4 !important;
            transform: scale(1.1);
        }

        /* Botones personalizados */
        .btn-nav {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #fff;
            padding: 8px 15px;
            border: none;
            border-radius: 30px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        }

        .btn-nav i {
            font-size: 1.2rem;
        }

        .btn-edit {
            background-color: #ff9800;
        }

        .btn-edit:hover {
            background-color: #e68a00;
            transform: scale(1.1);
        }

        .btn-inventory {
            background-color: #4caf50;
        }

        .btn-inventory:hover {
            background-color: #388e3c;
            transform: scale(1.1);
        }

        .btn-logout {
            background-color: #f44336;
        }

        .btn-logout:hover {
            background-color: #d32f2f;
            transform: scale(1.1);
        }

        .btn-home {
            background-color: #3f51b5;
        }

        .btn-home:hover {
            background-color: #303f9f;
            transform: scale(1.1);
        }

        /* Responsive */
        @media (max-width: 767px) {
            .nav-link {
                font-size: 0.9rem;
                text-align: center;
            }

            .navbar-brand {
                font-size: 1.4rem;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">

        <div class="container">
            <a class="navbar-brand" href="#"><i class="fas fa-suitcase"></i> Tienda </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="background-color: #fff;"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <?php if (isset($_SESSION['usuario']) && !empty($_SESSION['usuario'])) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-user"></i> <?= $_SESSION['usuario']['nombre']; ?></a>
                        </li>
                        <li class="nav-item">
                            <a href="editar_usuario" class="btn btn-edit btn-nav" id="btn_editar">
                                <i class="fas fa-user-edit"></i> Editar Usuario
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="inventario" class="btn btn-inventory btn-nav" id="btn_inventario">
                                <i class="fas fa-boxes"></i> Inventario
                            </a>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="btn btn-logout btn-nav" id="btn_cerrar">
                                <i class="fas fa-sign-out-alt"></i> Cerrar sesión
                            </button>
                        </li>
                    <?php else : ?>
                        <li class="nav-item">
                            <a href="inicio" class="btn btn-home btn-nav">
                                <i class="fas fa-home"></i> Inicio
                            </a>
                        </li>
                    <?php endif ?>
                </ul>
            </div>
        </div>
    </nav>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
