<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <style>
    .btn-primary {
      background: linear-gradient(45deg, rgb(149, 20, 22), rgb(149, 20, 22));
      border: 2px solid black;
    }

    .btn-primary:hover {
      transform: scale(1.1);
      box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
      border: 2px solid black;
      transition: all 0.5s ease-in-out;
    }

    .button-container {
      display: flex;
      justify-content: space-between;
      margin-top: 1rem;
    }

    .error-message {
      color: red;
      font-weight: bold;
      margin-top: 1rem;
    }
  </style>
</head>

<body>
  <div class="container d-flex justify-content-center align-items-center vh-70">
    <div class="card w-50">
      <div class="card-body">
        <form id="login-form">
          <div data-mdb-input-init class="form-outline mb-4">
            <h2>Login</h2>
            <input type="text" name="usuario" id="usuario" class="mt-2 form-control" placeholder="Ingrese su usuario"
              required>
          </div>

          <div data-mdb-input-init class="form-outline mb-4">
            <input type="password" name="password" id="contraseña" class="form-control"
              placeholder="Ingrese su contraseña" required>
          </div>

          <div class="button-container">
            <button type="submit" class="btn btn-primary btn-block mb-4">Iniciar Sesión</button>
          </div>

          <div class="error-message"></div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script>
    const loginForm = document.getElementById('login-form');
    const errorMessage = document.querySelector('.error-message');

    loginForm.addEventListener('submit', async (event) => {
      event.preventDefault();

      const formData = new FormData(loginForm);

      try {
        const response = await fetch('MODELS/login.php', {
          method: 'POST',
          body: formData
        });

        if (!response.ok) {
          throw new Error('Error en la solicitud al servidor');
        }

        const data = await response.json();

        if (data.error) {
          errorMessage.textContent = data.error; // Mostrar mensaje de error
        } else if (data.success) {
          localStorage.setItem('token', data.token); // Guardar el token en localStorage
          window.location.href = 'http://localhost/Proyecto_Visual/cv_cuarto/index.php?action=servicios';
        }
      } catch (error) {
        errorMessage.textContent = `Error: ${error.message}`;
      }
    });
  </script>
</body>

</html>