<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username === 'usuario' && $password === 'contraseña') {
        
        $_SESSION['username'] = $username;
        header("Location: index.php");
        exit();
    } else {
        echo "Usuario o contraseña incorrectos.";
    }
}
?>
