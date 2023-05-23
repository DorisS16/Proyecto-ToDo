
<?php
// Recibir el ID de la tarea y actualizar su estado en la base de datos
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $taskId = $_POST['taskId'];

    // Realizar la actualización en la base de datos o en alguna fuente de datos

    // Ejemplo: Actualizar la tarea en una base de datos ficticia
    actualizarTarea($taskId);
}