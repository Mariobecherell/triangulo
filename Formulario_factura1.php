<?php
error_reporting(0);
$array = array(
"Emisor" => 'Becherell Amaya Mario Ramon',
"Emisor RFC" => 'XAXX010101000zxc}ty,.}
',
"Receptor" => $_POST['name'],
"Telefono" => $_POST['telefono'],
"Email" => $_POST['email'],
"Receptor RFC" => $_POST['rfc']
)
?>
<html>

<head>
    <title>Practica</title>
</head>

<body>
    <form action="" method="POST">
        <input type="text" name="name" placeholder="Nombre Completo"required>
        <input type="text" name="email" placeholder="Correo Electronico"required>
        <input type="text" name="telefono" placeholder="Telefono"required>
        <input type="text" name="rfc" placeholder="RFC"required>
        <!-- <input type="text" name="name" placeholder="Nombre(s)"required>
        <input type="text" name="name" placeholder="Nombre(s)"required> -->
        <select name="producto" required>
            <option value="" selected disabled>Seleccione un Producto del cual le convenga
            <option value="20">Producto 1 - $20 pesos</option>
            <option value="250">Producto 2 - $250 pesos</option>
            <option value="550">Producto 3 - $550 pesos</option>
        </select>
        <button type="submit">Enviar</button>
</form>

<?php foreach ($array as $key => $value) { ?>
    <div class="contenedor">
        <div class="datos_fheader">
            <div class="datos_emisor">
                <p style="font-weight: bold;"><?= $key ?>: <?= $value ?></p>
            </div>
            <div class="datos_fbody">

            </div>
        </div>
    <?php } ?>
    </body>
    </html>