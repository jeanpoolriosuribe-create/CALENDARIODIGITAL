<<?php
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calendario Digital</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      background-color: #f9fbff;
      color: #333;
      scroll-behavior: smooth;
    }

    /* --- BARRA DE NAVEGACIÓN SUPERIOR --- */
    nav {
      background: white;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 40px;
      position: sticky;
      top: 0;
      z-index: 100;
    }

    nav h2 {
      color: #007bff;
      font-size: 1.5rem;
    }

    nav ul {
      list-style: none;
      display: flex;
      gap: 25px;
    }

    nav ul li a {
      text-decoration: none;
      color: #007bff;
      font-weight: 600;
      transition: color 0.3s;
    }

    nav ul li a:hover {
      color: #0056b3;
    }

    /* --- CABECERA PRINCIPAL --- */
    header {
      background: linear-gradient(90deg, #007bff, #5dade2);
      color: white;
      text-align: center;
      padding: 60px 20px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    header h1 {
      font-size: 3rem;
      margin-bottom: 15px;
      animation: fadeInDown 1s ease;
    }

    header p {
      font-size: 1.1rem;
      max-width: 600px;
      margin: 0 auto 30px;
      line-height: 1.6;
      animation: fadeInUp 1.2s ease;
    }

    .btn {
      display: inline-block;
      background-color: white;
      color: #007bff;
      padding: 12px 30px;
      border-radius: 30px;
      text-decoration: none;
      font-weight: bold;
      transition: all 0.3s ease;
      animation: fadeInUp 1.5s ease;
    }

    .btn:hover {
      background-color: #007bff;
      color: white;
      transform: scale(1.05);
    }

    section {
      padding: 60px 20px;
      text-align: center;
      opacity: 0;
      transform: translateY(40px);
      transition: all 0.8s ease;
    }

    section.visible {
      opacity: 1;
      transform: translateY(0);
    }

    section h2 {
      color: #007bff;
      font-size: 2.2rem;
      margin-bottom: 20px;
    }

    .features {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 30px;
      margin-top: 30px;
    }

    .feature-box {
      background: white;
      border-radius: 15px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      padding: 25px;
      width: 260px;
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .feature-box:hover {
      transform: translateY(-8px);
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
    }

    .feature-box h3 {
      color: #007bff;
      margin-bottom: 10px;
    }

    footer {
      background-color: #007bff;
      color: white;
      text-align: center;
      padding: 20px;
      font-size: 0.9rem;
      margin-top: 50px;
    }

    /* Animaciones */
    @keyframes fadeInDown {
      from {opacity: 0; transform: translateY(-30px);}
      to {opacity: 1; transform: translateY(0);}
    }

    @keyframes fadeInUp {
      from {opacity: 0; transform: translateY(30px);}
      to {opacity: 1; transform: translateY(0);}
    }
  </style>
</head>
<body>
  <!-- 🔹 MENÚ SUPERIOR -->
  <nav>
    <h2>Calendario Digital</h2>
    <ul>
      <li><a href="#inicio">Inicio</a></li>
      <li><a href="#acerca">Acerca</a></li>
      <li><a href="#contacto">Contacto</a></li>
    </ul>
  </nav>

  <!-- 🔹 SECCIÓN INICIO -->
  <header id="inicio">
    <h1>Bienvenido a Calendario Digital</h1>
    <p>
      Tu herramienta ideal para organizar tus días de manera inteligente.  
      Administra eventos, tareas y recordatorios fácilmente desde cualquier dispositivo.
    </p>
    <a href="#acerca" class="btn">Entrar</a>
  </header>

  <!-- 🔹 SECCIÓN ACERCA -->
  <section id="acerca">
    <h2>¿Qué es Calendario Digital?</h2>
    <p>
      <strong>Calendario Digital</strong> es una plataforma diseñada para ayudarte a mantenerte organizado.
      Aquí podrás gestionar tus eventos, crear recordatorios y planificar tus actividades diarias, semanales y mensuales
      de forma simple, rápida y visual.
    </p>

    <div class="features">
      <div class="feature-box">
        <h3>📅 Agenda Personal</h3>
        <p>Planifica tus días y semanas con un calendario digital fácil de usar.</p>
      </div>
      <div class="feature-box">
        <h3>⏰ Recordatorios</h3>
        <p>Recibe alertas para no olvidar tus compromisos más importantes.</p>
      </div>
      <div class="feature-box">
        <h3>🎯 Eventos</h3>
        <p>Visualiza los eventos más relevantes del mes y añade los tuyos.</p>
      </div>
    </div>
  </section>

  <!-- 🔹 SECCIÓN CONTACTO -->
  <section id="contacto">
    <h2>Contáctanos</h2>
    <p>¿Tienes dudas o sugerencias? Envíanos un mensaje, estaremos felices de ayudarte.</p>
    <p><strong>📧 correo:</strong> soporte@calendariodigital.com</p>
    <p><strong>📞 Teléfono:</strong> +57 300 123 4567</p>
  </section>

  <!-- 🔹 PIE DE PÁGINA -->
  <footer>
    © 2025 Calendario Digital | Organización Inteligente para tu Día a Día
  </footer>

  <!-- 🔹 SCRIPT DE ANIMACIÓN -->
  <script>
    const sections = document.querySelectorAll("section");
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add("visible");
        }
      });
    }, { threshold: 0.2 });

    sections.forEach(section => observer.observe(section));
  </script>
</body>
</html>
