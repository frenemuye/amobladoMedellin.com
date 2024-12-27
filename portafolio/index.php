<?php
// Este archivo sirve como una página de portafolio en PHP nativo.
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portafolio de Freddy Muñoz Yepes">
    <title>Portafolio - Freddy Nelson Muñoz Yepes</title>
    <link rel="shortcut icon" href="assets/img/py.png" type="image/x-icon">
    <style>
        /* CSS Global */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
        }

        header {
            background-color: #007bff;
            color: #fff;
            padding: 1rem 2rem;
            text-align: center;
        }

        /* Estilo del menú web horizontal */
        .menu-web {
            display: flex;
            justify-content: center;
            background-color: #007bff;
            padding: 0.5rem 0;
        }

        .menu-web ul {
            list-style: none;
            display: flex;
            gap: 1rem;
            margin: 0;
            padding: 0;
        }

        .menu-web ul li {
            text-align: center;
        }

        .menu-web ul li a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }

        /* Esconde el menú móvil */
        input[type="checkbox"] {
            display: none;
        }

        input[type="checkbox"]:not(:checked)~nav.menu-mobile {
            display: none;
        }

        .menu-mobile {
            display: none;
            flex-direction: column;
            background-color: #007bff;
            position: relative;
            top: 15px;
            /* Altura del header */
            width: 100%;
            z-index: 1000;
        }

        .menu-mobile ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .menu-mobile ul li {
            text-align: center;
            padding: 10px 0;
        }

        .menu-mobile ul li a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }

        .menu-mobile-toggle {
            display: none;
            cursor: pointer;
            /* border: 2px solid #fff; */
        }

        .menu-mobile-toggle div {
            width: 30px;
            height: 4px;
            margin: 5px;
            background-color: #fff;
            border-radius: 5px;
        }

        /* imagenes de tecnologias de desarrollo */
        section {
            padding: 2rem;
            margin: 1rem auto;
            max-width: 1200px;
        }

        .container-img {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .container-img img {
            width: 150px;
            height: auto;
            margin: 0 auto;
            display: block;
            margin-bottom: 1rem;
            margin-top: 1rem;
            border: 2px solid #007bff;
        }

        /* imagenes de freddy */
        .container-img-freddy {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 1rem;
        }

        #sobre-mi img {
            width: 150px;
            height: auto;
            border-radius: 50%;
            margin: 0 auto;
            display: block;
            margin-bottom: 1rem;
            margin-top: 1rem;
            border: 2px solid #007bff;
        }

        /* proyectos */
        .project-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 1rem;
        }

        .project {
            width: 300px;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .project img {
            width: 100%;
            height: 200px;
            display: block;
        }

        .project a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
            border: 1px solid #007bff;
            border-radius: 5px;
            padding: 5px;
        }

        .project a:hover {
            background-color: #007bff;
            color: #fff;
        }

        .project-content {
            padding: 1rem;
        }

        #contacto {
            text-align: center;
        }

        footer {
            text-align: center;
            padding: 1rem;
            background-color: #007bff;
            color: white;
        }

        /* boton subir */
        .boton-subir {
            background-color: #007bff;
            border-radius: 50%;
            position: fixed;
            bottom: 100px;
            right: 20px;
            z-index: 1000;
            cursor: pointer;
            transition: transform 0.5s ease-in-out;
        }

        .boton-subir img {
            width: 60px;
            height: 60px;
        }

        .boton-subir a {
            text-decoration: none;
            color: #000;
        }

        .boton-subir:hover {
            color: #000;
            transform: scale(1.3);
        }

        /* boton whatsapp */
        .boton-whatsapp {
            background-color: #007bff;
            border-radius: 50%;
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
            transition: transform 0.5s ease-in-out;
            cursor: pointer;
        }

        .boton-whatsapp:hover {
            transform: scale(1.3);
        }

        .boton-whatsapp img {
            width: 60px;
            height: 60px;
        }


        @media (max-width: 768px) {
            input[type="checkbox"]:checked~nav.menu-mobile {
                display: flex;
            }

            .menu-web {
                display: none;
            }

            .menu-mobile-toggle {
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            /* resto del proyecto */
            .project-grid {
                flex-direction: column;
                align-items: center;
            }

            .boton-whatsapp {
                bottom: 10px;
                right: 10px;
            }

            .boton-subir {
                bottom: 80px;
                right: 10px;
            }

            .boton-whatsapp img {
                width: 50px;
                height: 50px;
            }

            .boton-subir img {
                width: 50px;
                height: 50px;
            }
        }
    </style>
</head>

<body>
    <header id="inicio">
        <h1>Portafolio desarrollador sw Freddy Nelson Muñoz Yepes</h1>
        <label for="check" class="menu-mobile-toggle">
            <div></div>
            <div></div>
            <div></div>
        </label>
        <input type="checkbox" id="check">

        <!-- Menú Web -->
        <nav class="menu-web">
            <ul>
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#sobre-mi">Sobre mí</a></li>
                <li><a href="#proyectos">Proyectos</a></li>
                <li><a href="#experiencia">Experiencia</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>

        <!-- Menú Móvil -->
        <nav class="menu-mobile">
            <ul>
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#sobre-mi">Sobre mí</a></li>
                <li><a href="#proyectos">Proyectos</a></li>
                <li><a href="#experiencia">Experiencia</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <section id="tecnologias">
        <h2>Bienvenido a mi Portafolio de Tecnologias que domino</h2>
        <p>Descubre algunos de los proyectos en los que he trabajado como desarrollador web. Espero que encuentres inspiración en ellos.</p>
        <div class="container-img">
            <img src="./assets/img/algoritmos.jpg" alt="Foto de Freddy Nelson Muñoz Yepes">
            <img src="./assets/img/la-metodologia-scrum.png" alt="Foto de Freddy Nelson Muñoz Yepes">
            <img src="./assets/img/UML.gif" alt="Foto de Freddy Nelson Muñoz Yepes">
            <img src="./assets/img/wordpress.webp" alt="Foto de Freddy Nelson Muñoz Yepes">
            <img src="./assets/img/html.png" alt="Foto de Freddy Nelson Muñoz Yepes">
            <img src="./assets/img/css.jpg" alt="Foto de Freddy Nelson Muñoz Yepes">
            <img src="./assets/img/js.png" alt="Foto de Freddy Nelson Muñoz Yepes">
            <img src="./assets/img/py.png" alt="Foto de Freddy Nelson Muñoz Yepes">
            <img src="./assets/img/php.png" alt="Foto de Freddy Nelson Muñoz Yepes">
            <img src="./assets/img/mysql.png" alt="Foto de Freddy Nelson Muñoz Yepes">
            <img src="./assets/img/laravel.png" alt="Foto de Freddy Nelson Muñoz Yepes">

        </div>
    </section>

    <section id="sobre-mi">
        <h2>Sobre mí</h2>
        <p class="container-img-freddy">
            <img src="./assets/img/enseñar (1).jpeg" alt="Foto de Freddy Nelson Muñoz Yepes">
            <img src="./assets/img/grande-removebg-preview.jpg" alt="Foto de Freddy Nelson Muñoz Yepes">
            <img src="./assets/img/enseñar (2).jpeg" alt="Foto de Freddy Nelson Muñoz Yepes">
        </p>

        <p>
            Soy un desarrollador apasionado por la creación de soluciones web funcionales y atractivas. Domino tecnologías como UML, SCRUM, GIT, GITHUB, WORDPRESS, PYTHON, PHP, LARAVEL, MySQL, HTML, CSS y JavaScript, y tengo experiencia en el desarrollo de sistemas de reservas y carritos de compras.
        </p>
        <p>
            Soy apasionado por la creación de soluciones web que combinan funcionalidad y diseño atractivo. Domino tecnologías que utilizo para construir sistemas robustos y escalables. Mi experiencia incluye el desarrollo de sistemas de reservas y carritos de compras, destacándome en la implementación de flujos de usuario intuitivos y eficientes. <br>

        <p>
            En un proyecto reciente, trabajé en el diseño y desarrollo de un sistema para una barbería, que incluye agendamiento de citas, gestión de inventarios y ventas de productos. Utilicé UML (Lenguaje Unificado de Modelado) para plasmar la estructura y lógica del sistema, creando diagramas de casos de uso, clases y secuencia para asegurar una planificación clara y eficiente. Este enfoque permitió optimizar la interacción entre usuarios y servicios, logrando un producto final de alta calidad que satisface las necesidades del cliente.
        </p>

        <p>
            Me motiva enfrentar nuevos desafíos y transformar ideas en soluciones digitales que hagan la diferencia. Estoy en constante aprendizaje, explorando tecnologías y metodologías para seguir mejorando en mi campo.
        </p>
        </p>
    </section>

    <section id="proyectos">
        <h2>Proyectos</h2>
        <div class="project-grid">
            <?php
            $projects = [
                ["title" => "Barbería con Reserva (UML)", "description" => "Sistema de reservas y venta de productos.", "image" => "assets/img/barberiaLogo.jpg", "link" => "barberia.php"],

                ["title" => "Catálogo de Apartamentos", "description" => "Portal web para apartamentos amoblados.", "image" => "assets/img/apartamentosLogo.jpg", "link" => "apartamentos.php"],

                ["title" => "Sistema de Votación Escolar", "description" => "Plataforma para gestionar estudiantes y cursos.", "image" => "assets/img/votacionLogo.jpg", "link" => "votacion.php"],

                ["title" => "Venta de celulares", "description" => "Plataforma para gestionar celulares y precios actualizados mediante el llamado de un archivo.txt.", "image" => "assets/img/celularesLogo.jpg", "link" => "celulares.php"],

                ["title" => "App en js", "description" => "Plataforma para ver apps en javascript.", "image" => "assets/img/jsLogo.jpg", "link" => "appEnJs.php"],

                ["title" => "Sistema de blog wordpress", "description" => "Plataforma para gestionar post en wordpress.", "image" => "assets/img/wordpressLogo.jpg", "link" => "front.php"],

                ["title" => "Frontend en bostrap y html, css y js ", "description" => "frotn end de una pagina web en bostrap y js, css y html  .", "image" => "assets/img/frontLogo.jpg", "link" => "front.php"],
            ];

            foreach ($projects as $project) {
                echo "<div class='project'>
                        <img src='{$project['image']}' alt='{$project['title']}'>
                        <div class='project-content'>
                            <h3>{$project['title']}</h3>
                            <p>{$project['description']}</p>
                            <a href='{$project['link']}'>Ver más</a>
                        </div>
                    </div>";
            }
            ?>
        </div>
    </section>

    <section id="experiencia">
        <h2>Experiencia</h2>
        <h3>Experiencia como desarrollador</h3>
        <p>
            En mi experiencia como desarrollador, he trabajado en proyectos que han requerido una planificación meticulosa y una implementación cuidadosa. Uno de los proyectos más significativos que he llevado a cabo es el desarrollo de un sistema de votación escolar. Este proyecto fue una experiencia en la que aprendí a manejar la lógica detrás de un sistema de votación, así como a implementar medidas de seguridad para proteger la integridad de los datos.

            Durante el desarrollo de este sistema, utilicé SCRUM como metodología de desarrollo, lo que me permitió mantener un flujo de trabajo constante y enfocado en las necesidades del cliente. Aprendí a trabajar en equipo, a gestionar tareas de manera eficiente y a mantener una comunicación clara con el equipo de desarrollo.
        </p>

        <p>
            Tambien tengo experiencia en el desarrollo de sistemas de reservas y carritos de compras de una barberia, trabaje en la parte de analisis de requerimientos, diseño de base de datos y sus diagramas, desarrollo de la la base de datos, desarrollo de la logica del sistema en mysql, desarrollo de la interfaz de usuario con html, css y javascript y la los manuales de usuario y técnico.
        </p>

        <h3>Experiencia como docente</h3>
        <p>
            En mi experiencia como docente SENA, he trabajado en proyectos que han requerido una planificación meticulosa y una implementación cuidadosa. Uno de los proyectos más significativos que he llevado a cabo es el desarrollo de un sistema de una barberia con agendamiento de citas, gestion de inventarios y ventas de productos. </p>
        <p>
            Tambien tengo experiencia en el desarrollo de sistemas de reservas y carritos de compras en general, trabaje en la parte de analisis de requerimientos, diseño de base de datos y sus diagramas, desarrollo de la la base de datos, desarrollo de la logica del sistema en mysql, desarrollo de la interfaz de usuario con html, css y javascript y la los manuales de usuario y técnico.
        </p>
        <p>
            Otro proyecto fue realizado mientras fui docente de la media tecnica en la gobernacion de antioquia, el proyecto fue un sistema de votacion donde aprendi las bases solidas de la logica de un sistema de votacion, así como a implementar medidas de seguridad para proteger la integridad de los datos.
        </p>
        <p>
            Otro proyecto fue educar a los estudiantes de la media tecnica en la gobernacion de antioquia, en algoritmos, html, css, javascript como docente de la materia de programacion web.
        </p>
        </p>

    </section>

    <section id="contacto">
        <h2>Contacto</h2>
        <form action="#" method="POST">
            <label for="nombre">Nombre:</label><br>
            <input type="text" id="nombre" name="nombre" required><br><br>

            <label for="email">Correo electrónico:</label><br>
            <input type="email" id="email" name="email" required><br><br>

            <label for="mensaje">Mensaje:</label><br>
            <textarea id="mensaje" name="mensaje" rows="5" required></textarea><br><br>

            <button type="submit">Enviar</button>
        </form>
    </section>

    <footer>
        <p>© 2024 Freddy Nelson Muñoz Yepes. Todos los derechos reservados.</p>
    </footer>

    <div class="botones-fixed">
        <div class="boton-subir">
            <a href="#inicio">
                <img src="https://img.icons8.com/?size=100&id=9d0casenOiHS&format=png&color=000000" alt="WhatsApp">
            </a>
        </div>

        <div class="boton-whatsapp">
            <a href="https://wa.me/573008036167" target="_blank">
                <img src="https://img.icons8.com/?size=100&id=A1JUR9NRH7sC&format=png&color=000000" alt="WhatsApp">
            </a>
        </div>
    </div>
</body>

</html>