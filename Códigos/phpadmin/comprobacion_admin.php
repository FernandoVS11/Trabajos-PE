<?php
session_start();
    if(!isset($_SESSION['admin'])){
        echo '
            <script>
                alert("Por favor debes iniciar sesión");
                window.location = "../admin/login_admin.php";
            </script>
        ';
        session_destroy();
        die();
    }
?>