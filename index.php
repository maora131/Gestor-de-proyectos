<!DOCTYPE html>
<html>
<head>
    <title>Mi gestor de tareas sencillo | phpGrid</title>
    <link type="text/css" rel="Stylesheet" href="../css/style2.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dongle:wght@300&display=swap" rel="stylesheet">
</head>
<body>


<div class="centered">
    
<h1 styles="font-family: 'Dongle', sans-serif;">Mi gestor de proyectos</h1>

<a href="manager/clients.php" target="_new">Entrar como manager</a> | <a href="employee/tasks.php" target="_new">Entrar como empleado</a>
</div>

<div class="footer"><strong>Sofía Sanmartín</strong> | phpGrid &copy; <?php echo date('Y'); ?>.</div>

</body>
</html>
<!-- CAMBIO GORDO CAMBIO GORDO ESTO ES UN AÑADIDO DE ISMAEL<?php    
include_once('../inc/head.php');
?>

<div class="centered">
<h1>Gestor</h1>

<a href="manager/clients.php" target="_new">Login as manager</a> | <a href="employee/tasks.php" target="_new">Login as employee</a>
</div>

<div class="footer"><strong>Build-From-Scratch Series</strong> | phpGrid &copy; <?php echo date('Y'); ?>.</div>

<?php     
include_once('../inc/footer.php');
?>