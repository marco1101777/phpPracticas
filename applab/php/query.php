<?php 
    include("mysqlConexion.php") ;   
    if($_POST){
            $Nombre_Proyecto  =  $_POST["Nombre_Proyecto"] ;  
            $Fecha_Inicio  =  $_POST["Fecha_Inicio"] ;  
            $Fecha_Fin  =  $_POST["Fecha_Fin"] ;  
            $Presupuesto   =  $_POST["Presupuesto"] ;  
            
            $insert  = "INSERT INTO Proyectos (Nombre_Proyecto , Fecha_Inicio , Fecha_Fin ,Presupuesto ) VALUES   
            ('{$Nombre_Proyecto}' , '{$Fecha_Inicio}' , '{$Fecha_Fin}' , {$Presupuesto} ) ;" ; 
                
            $query  = mysqli_query($cnx, $insert );

            if($query){
                echo "Todo Bien " ; 
                echo "<script>  
                    setTimeout(()=>{
                        window.location.assign('../index.html') ; 

                    } , 2000) ; 
                </script>";

            }else{

                echo "Algo  Salio Mal D: " ; 
            }
    }
?>
