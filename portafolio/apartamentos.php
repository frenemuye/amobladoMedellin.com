<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio de Sitios Web</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4faff;
            color: #333;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #007bff;
            color: white;
            padding: 20px 10px;
            text-align: center;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .section {
            margin-bottom: 40px;
        }

        h2 {
            color: #007bff;
            margin-bottom: 20px;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        ul li {
            margin: 10px 0;
            background-color: white;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        ul li a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }

        ul li a:hover {
            text-decoration: underline;
        }

        footer {
            background-color: #007bff;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        .button-container {
            text-align: center;
        }

        button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

         /* boton subir */
         .boton-subir {
            position: fixed;
            bottom: 100px;
            right: 20px;
            z-index: 1000;
            cursor: pointer;
            transition: transform 0.3s ease-in-out;
        }

        .boton-subir img {
            width: 70px;
            height: 70px;
        }

        .boton-subir a {
            text-decoration: none;
            color: #000;
        }
    </style>
</head>

<body>

    <header id="inicio">
        <h1>Portafolio de Sitios Web Desarrollados</h1>
    </header>

    
    <div class="container">

        <section class="section">
            <h2>Detalles del Proyecto</h2>
            <p>Este proyecto centraliza múltiples dominios con redirección a <a href="https://suamoblado.com" target="_blank">suamoblado.com</a>, donde se gestionan reservas de apartamentos amoblados en Medellín.
                El sistema permite a los administradores actualizar precios tanto de los apartamentos como de otro proyecto asociado, <a href="https://celularesmedellin.com" target="_blank">celularesmedellin.com</a>, de manera eficiente.
            </p>
            <p>
                El proyecto trabaja con ceo organico permitiendo alcanzar un alto posicionamiento en los motores de busqueda con las palabras claves mas relevantes, es asi como al buscar amoblados medellin, se posiciona en el top 7 de la primera pagina de google, pero ademas cuenta con google business permitiendo que los usuarios puedan ver la ubicacion de los apartamentos en un mapa y contactar por whatsapp y youtube para ver videos de los apartamentos.
            </p>
        </section>

        <section class="section">
            <h2>Dominios y Funcionalidades</h2>
            <ul>
                <li>
                    <strong>Principal:</strong> <a href="https://suamoblado.com" target="_blank">suamoblado.com</a> (Todos los dominios secundarios redirigen aquí)
                </li>
                <li>
                    <strong>Secundarios:
                        <ul>
                            <li><a href="https://apartamentoamobladomedellin.com.co" target="_blank">AapartamentoAmobladoMedellin.com.co</a> (back office de suamoblado.com)</li>
                            <li><a href="https://apartamentoamobladomedellin.com" target="_blank">ApartamentoAmobladoMedellin.com</a> (Dominio bien posicionado que se encuentra en el top 10 de google)</li>
                            <li><a href="https://apartamentosamobladosmedellin.com" target="_blank">ApartamentosAmobladosMedellin.com.co</a> (Dominio bien posicionado que se encuentra en el top 10 de google)</li>
                            <li><a href="https://amobladomedellin.com" target="_blank">AmobladosMedellin.com</a> (Dominio bien posicionado que se encuentra en el top 10 de google)</li>
                        </ul>
                </li>
                <li>
                    <strong>Panel de Administración:</strong> <a href="https://apartamentoamobladomedellin.com.co/login" target="_blank">apartamentoamobladomedellin.com.co/login</a>
                    <ul>
                        <li>Gestión de reservas (Google Sheets)</li>
                        <li>Actualización de precios de apartamentos</li>
                        <li>Actualización de precios de celulares</li>
                    </ul>
                </li>
                <li>
                    <strong>Integración adicional:</strong> Actualización de precios en: <a href="https://celularesmedellin.com" target="_blank">celularesmedellin.com</a>
                </li>
            </ul>
        </section>


        <section class="section">
            <h2>Tecnologías Utilizadas</h2>
            <ul>
                <li>HTML5, CSS3</li>
                <li>JavaScript</li>
                <li>PHP para el backend</li>
                <li>Integración con Google Sheets API</li>
                <li>MY SQL</li>
            </ul>
        </section>
    </div>
    <div class="button-container">
        <button onclick="window.location.href='index.php'">Volver</button>
    </div>
    <br><br><br><br><br><br>
    <footer>
        <p>&copy; 2024 Freddy Nelson Muñoz Yepes | Todos los derechos reservados</p>
    </footer>
    <div class="boton-subir">
        <a href="#inicio">
            <img src="https://img.icons8.com/?size=100&id=9d0casenOiHS&format=png&color=000000" alt="WhatsApp">
        </a>
    </div>
</body>

</html>