

<?php
try {
    $host = "127.0.0.1"; 
    $dbname = "db_streetwear"; // Substitua pelo nome do seu banco
    $username = "root";
    $password = "1234"; // Senha vazia

    $cn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Falha na conexão: " . $e->getMessage();
    exit;
}
?>

