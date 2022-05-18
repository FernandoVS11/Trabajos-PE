<?php
session_start();
    if(!isset($_SESSION['voters'])){
        echo '
            <script>
                alert("Por favor debes iniciar sesión");
                window.location = "../index.php";
            </script>
        ';
        session_destroy();
        die();
    }
?>