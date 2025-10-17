<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola Món PHP</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <h1><?php echo "Hola Món! 👋"; ?></h1>
    <?php
$host = 'db';         // nombre del servicio MySQL en docker-compose
$user = 'Iker';       // tu usuario MySQL
$pass = 'p@ssw0rd';   // tu contraseña MySQL
$db   = 'demo';       // tu base de datos

try {
    $conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<p><strong>✅ Conexión correcta a la base de datos '$db'.</strong></p>";
} catch (PDOException $e) {
    echo "<p><strong>❌ Error de conexión:</strong> " . htmlspecialchars($e->getMessage()) . "</p>";
}
?>
</body>
</html>