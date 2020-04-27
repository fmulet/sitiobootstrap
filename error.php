<?php

$title = 'Usuario no existe';

include 'vista/modulos/header.php';

echo '<div class="my-5">';

echo '<img src="vista/images/error.png" class="img-fluid mx-auto d-block" width="200">';

echo '<h3><h2 class="font-weight-bold text-center my-5">Usuario o contraseña incorrecta</h2></h3>';

echo '<p class="text-center"><a href="index.php" class="text-danger my-5">Volver al Home</a></p>';

echo '</div>';

include 'vista/modulos/footer.php';

?>