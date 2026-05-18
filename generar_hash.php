<?php
// imprime el hash de la contraseña indicada abajo.
// se copia y pega en la tabla 'usuario' de la base.

$passwordPlana = 'admin123';
echo password_hash($passwordPlana, PASSWORD_DEFAULT);
?>