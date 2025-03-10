<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="/css/styles.css">
  <link rel="stylesheet" href="/css/login.css">
  <link rel="shortcut icon" href="/images/favicon.png" type="image/x-icon">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <title>ADE Bank | login</title>
</head>

<body>
  <main id="login-container">
    <div class="contenedor__todo">
      <div class="caja__trasera">
        <div class="caja__trasera-register">
          <h3>¿Aún no tienes una cuenta?</h3>
          <p>registrate para que puedas iniciar sesión</p>
          <button id="btn__registrarse">Registrarse</button>
        </div>
      </div>
      <!-- Formulario de login y registro -->
      <div class="contenedor__login-register">
        <!-- login -->
        <form action="" method="POST" Id="login-form" class="formulario__login text-center">
          <h2>Iniciar Sesión</h2>
          <div class="input-group ">
            <span class="input-group-addon"><i class="fa-solid fa-at"></i></span>
            <input type="email" name="username" class="form-control" id="email" placeholder="Correo Electronico"
              required />
          </div>
          <div class="input-group ">
            <span class="input-group-addon">
              <i class="fa-solid fa-lock"></i>
            </span>
            <input type="password" name="password" class="form-control" id="password_login" placeholder="Contraseña"
              required />
            <span class="input-group-addon toggle_show_password" data-toggle="input_password"
              data-target="#password_login">
              <svg class="eye" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
                <title>Mostrar contraseña</title>
                <path
                  d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z">
                </path>
              </svg>
            </span>
          </div>
          <button type="submit" id="btn-login">Entrar</button>
          <div id="message"></div>
        </form>
      </div>
    </div>
  </main>
  <script type="module" src="/js/login.js"></script>
</body>

</html>