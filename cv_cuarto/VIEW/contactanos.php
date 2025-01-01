<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contáctanos</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color:rgb(255, 255, 255); 
            color: white;
            font-family: 'Arial', sans-serif;
        }

        h2 {
            font-weight: bold;
            text-transform: uppercase;
        }

        form input,
        form textarea {
            background-color: #ffffff;
            color: #8B0000;
            border: 1px solid #8B0000;
        }

        form input:focus,
        form textarea:focus {
            outline: none;
            box-shadow: 0 0 5px rgba(139, 0, 0, 0.5);
        }

        form button {
            font-weight: bold;
            border: 2px solid #8B0000;
        }

        form button:hover {
            background-color: #8B0000;
            color: white;
        }

        .bg-danger {
            background-color: #8B0000 !important; 
        }

        .bg-white {
            background-color: white !important;
        }

        .rounded {
            border-radius: 10px;
        }

        .contact-title {
            color: #8B0000; 
            font-weight: bold;
        }

        .contact-info label {
            color: #8B0000;
            font-weight: bold;
        }

        .contact-info span {
            color: #000000; 
        }
    </style>
</head>

<body>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-6">
                <form class="p-4 bg-danger text-white rounded">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre Completo</label>
                        <input type="text" class="form-control" id="nombre" placeholder="Ingresa tu nombre" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" id="email" placeholder="Ingresa tu correo" required>
                    </div>
                    <div class="mb-3">
                        <label for="mensaje" class="form-label">Mensaje</label>
                        <textarea class="form-control" id="mensaje" rows="5" placeholder="Escribe tu mensaje aquí" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-light text-danger w-100">Enviar</button>
                </form>
            </div>
            <div class="col-md-6">
                <div class="p-4 bg-white rounded contact-info">
                    <h4 class="contact-title">Información de Contacto</h4>
                    <p><label>Dirección:</label> <span>Av. Universitaria, Ambato, Ecuador</span></p>
                    <p><label>Teléfono:</label> <span>099 705 4558</span></p>
                    <p><label>Email:</label> <span>direccion.academica@uta.edu.ec.</span></p>
                </div>
                <div class="mt-4">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3827.7390884963997!2d-78.6227750850635!3d-1.254175199065363!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d3a432eb7f9f11%3A0x1bb1b0b8fd4f2568!2sUniversidad%20T%C3%A9cnica%20de%20Ambato%20-%20UTA!5e0!3m2!1ses-419!2sec!4v1700000000000!5m2!1ses-419!2sec" 
                        width="100%" 
                        height="250" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
