<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diagrama de Dominio - Barbería</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        header {
            background-color: #0056b3;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .container {
            padding: 20px;
            max-width: 1200px;
            margin: auto;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .diagram-section {
            text-align: center;
            margin-bottom: 30px;
        }
        .diagram-section img {
            max-width: 100%;
            border: 2px solid #0056b3;
            border-radius: 8px;
        }
        .entity-description {
            margin-bottom: 30px;
        }
        .entity {
            margin-bottom: 20px;
            padding: 10px;
            background: #eaf3ff;
            border: 1px solid #0056b3;
            border-radius: 5px;
        }
        .entity h3 {
            color: #0056b3;
        }

        button {
            background-color: #0056b3;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #003d80;
        }
        .button-container {
            text-align: center; /* Centra horizontalmente cualquier elemento dentro del contenedor */
            margin-top: 20px; /* Agrega espacio arriba del contenedor */
        }
        .boton-subir {
            position: fixed;
            bottom: 20px;
            right: 20px;
            cursor: pointer;
            transition: transform 0.3s ease-in-out;
        }
        .boton-subir img {
            width: 50px;
            height: 50px;
        }
        .boton-subir a {
            text-decoration: none;
            color: #000;
        }
        .boton-subir:hover {
            color: #000;
            transform: scale(1.3);
        }
    </style>
</head>
<body>
    <header id="inicio">
        <h1>Diagrama de Dominio - Barbería</h1>
        <p>Un sistema para la gestión de citas, productos y servicios.</p>
    </header>
    <div class="container">
        <div class="diagram-section">
            <h2>Representación del Diagrama</h2>
            <img src="./assets/img/dominio.png" alt="Diagrama de dominio de la barbería">
        </div>
        <div class="entity-description">
            <h2>Descripción de las Entidades</h2>

            <div class="entity">
                <h3>1. Cliente</h3>
                <p>Representa a los usuarios del sistema que solicitan citas y adquieren productos o servicios.</p>
            </div>

            <div class="entity">
                <h3>2. Cita</h3>
                <p>Gestiona las reservas de los clientes con los barberos, incluyendo horarios y disponibilidad.</p>
            </div>

            <div class="entity">
                <h3>3. Producto/Servicio</h3>
                <p>Incluye todos los productos cosméticos y servicios ofrecidos por la barbería, como cortes de cabello o productos de cuidado personal.</p>
            </div>

            <div class="entity">
                <h3>4. Carrito</h3>
                <p>Permite a los clientes seleccionar productos y servicios antes de proceder al pago.</p>
            </div>

            <div class="entity">
                <h3>5. Detalle Carrito</h3>
                <p>Especifica los elementos seleccionados en el carrito, con detalles como cantidad y precio.</p>
            </div>

            <div class="entity">
                <h3>6. Pago</h3>
                <p>Gestión de las transacciones realizadas por los clientes para servicios y productos adquiridos.</p>
            </div>

            <div class="entity">
                <h3>7. Barberos</h3>
                <p>Gestión de los empleados responsables de realizar los servicios solicitados por los clientes.</p>
            </div>

            <div class="entity">
                <h3>8. Promociones y Descuentos</h3>
                <p>Sección dedicada a las ofertas especiales para los clientes, aplicada a productos o servicios.</p>
            </div>

            <div class="entity">
                <h3>9. Encuesta de Satisfacción</h3>
                <p>Permite recoger información sobre la experiencia del cliente para mejorar los servicios.</p>
            </div>
        </div>
        <div class="button-container">
            <button onclick="window.location.href='index.php'">Volver</button>
        </div>

    </div>
    <div class="boton-subir">
        <a href="#inicio">
            <img src="https://img.icons8.com/?size=100&id=9d0casenOiHS&format=png&color=000000" alt="WhatsApp">
        </a>
    </div>
</body>
</html>
