<?PHP
?>
// incluir laconexion
include("db/conexion.php");

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calendario Digital - Contacto</title>
  <style>
    body {
      background-color: #f9fbff;
      color: #333;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      text-align: center;
      margin: 0;
    }

    nav {
      background-color: #007bff;
      display: flex;
      justify-content: center;
      gap: 30px;
      padding: 15px;
    }

    nav a {
      color: white;
      text-decoration: none;
      font-weight: bold;
      transition: 0.3s;
    }

    nav a:hover {
      color: #d4eaff;
    }

    form {
      margin: 40px auto;
      background: white;
      padding: 30px;
      border-radius: 10px;
      width: 320px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    input, button {
      width: 90%;
      padding: 10px;
      margin: 10px 0;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    button {
      background-color: #007bff;
      color: white;
      font-weight: bold;
      cursor: pointer;
      transition: 0.3s;
    }

    button:hover {
      background-color: #0056b3;
    }

    h1 {
      color: #007bff;
      margin-top: 40px;
    }
  </style>
</head>
<body>
  <nav>
    <a href="inicio.html">Inicio</a>
    <a href="acerca.html">Acerca</a>
    <a href="contacto.html">Contacto</a>
    <a href="calendario.html">Calendario</a>
  </nav>

  <h1>Contáctanos</h1>
  <form onsubmit="goToCalendar(event)">
    <input type="text" placeholder="Nombre completo" required>
    <input type="email" placeholder="Correo electrónico" required>
    <button type="submit">Acceder a mi Calendario</button>
  </form>

  <script>
    function goToCalendar(e) {
      e.preventDefault();
      window.location.href = "calendario.html";
    }
  </script>
</body>
</html>
