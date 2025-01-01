<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Página de Inicio</title>
    <style>
        .hero-section {
            background-color: #930B0D;
            color: white;
            padding: 40px 20px;
            text-align: center;
        }
        .card {
            margin-bottom: 20px;
            box-shadow: 4px 16px 32px #930B0D;
        }
        .card-img-top {
            height: 200px;
            object-fit: cover;
        }
        .news-section {
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
        }
        .contact-section {
            padding: 20px;
            background-color: #f5f5f5;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <img src="images/fisei.png" class="card-img-top" alt="Misión">
                    <div class="card-body">
                        <h5 class="card-title">MISIÓN</h5>
                        <p class="card-text">
                            Formar profesionales líderes competentes, con visión humanista y pensamiento crítico,
                            a través de la Docencia, la Investigación y la Vinculación.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <img src="images/software.avif" class="card-img-top" alt="Visión">
                    <div class="card-body">
                        <h5 class="card-title">VISIÓN</h5>
                        <p class="card-text">
                            Ser un centro de formación superior con liderazgo y proyección nacional e internacional,
                            destacado por la excelencia académica y la innovación tecnológica.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="news-section mt-5 container">
    <h2 class="text-center">Explora la Facultad</h2>
    <div class="d-flex justify-content-center mt-3">
        <button class="btn mx-2" style="background-color: #951416; color: white; border-radius: 30px;" onclick="window.open('https://fisei.uta.edu.ec/v4.0/', '_blank')">Visitar página de la FISEI</button>
        <button class="btn mx-2" style="background-color: #951416; color: white; border-radius: 30px;" onclick="window.open('https://fisei.uta.edu.ec/v4.0/index.php/posgrado/coordinador-de-posgrado', '_blank')">Maestrías</button>
        <button class="btn mx-2" style="background-color: #951416; color: white; border-radius: 30px;" onclick="window.open('https://fisei.uta.edu.ec/v4.0/index.php/horarios', '_blank')">Horarios de Carreras</button>
        <button class="btn mx-2" style="background-color: #951416; color: white; border-radius: 30px;" onclick="window.open('https://fisei.uta.edu.ec/v4.0/index.php/comunidad', '_blank')">Comunidad Facultad</button>
    </div>
</section>




</body>
</html>
