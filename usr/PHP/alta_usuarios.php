<?php
    include("connect.php");
    echo "Se realizó exitósamene la conexión a la base de datos";
    if($_POST["nombre"]){
        $nombre = $_POST["nombre"] ; 
        $Ap = $_POST["Ap"] ; 
        $Am =  $_POST["Am"] ; 
        $tel = $_POST["telefono"] ; 
        $email  = $_POST["correo"] ; 
        $usr = $_POST['Usuario'] ;
        $pass =  $_POST['pass'] ;
        $pass2 = $_POST['pass2'] ; 

        if($pass == $pass2){
            $Sel = "INSERT  INTO Usuarios (Nombres , Apellido_paterno , Apellido_materno , Telefono  , Correo  ,Usuario , PAssword ) VALUES ('{$nombre}' , '{$Ap}' , '{$Am}' , '{$tel}', '{$email}' , '{$usr}' , '{$pass}') ; "   ; 
            $insert = mysqli_query($conexion  , $Sel ) ; 
            if($insert){
                echo "Grande" ; 
                echo "<script > window.location.assign('../index.html') ; </script>";

            }else{
                echo "Nimodo" ; 
                
            }    
        }else{
            echo "contranya incorrectas" ;
        }
        
    }

?>


<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Talleres</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    PHP
</body>
</html>