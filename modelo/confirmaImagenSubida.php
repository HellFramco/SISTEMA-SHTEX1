<?php
session_start();
require_once "db.php";
$conexion = new Conexion();





$accion = $_GET['accion'];

if ($accion == "confirmaImagenSubida") {

  require_once("db.php");
  $fecha = date('Y-m-d');    
  
  $consulta = "UPDATE inventarios_productos SET confirma_imagen_subida = 'SI' WHERE id_inventario = ".$_GET['id'];
  $modulo = $conexion->query($consulta);
  
        

        if($modulo){
            if ($_SESSION['typeUser'] == 8) {
                $link = '../panel/visualizar-inventario-vendedor.php';
                echo "
                    <script>
                          alert('SE HA CONFIRMADO QUE EXISTE FOTO PARA LA REFERENCIA.');
                          location.href = '".$link."';
                    //</script>
                ";
            }

            else if ($_SESSION['typeUser'] == 9) {
                $link = '../panel/visualizar-inventario-existencia-marketing.php';
                echo "
                    <script>
                          alert('SE HA CONFIRMADO QUE EXISTE FOTO PARA LA REFERENCIA.');
                          location.href = '".$link."';
                    //</script>
                ";
            }

            
        }

       

        else {
            
            echo "
                    <script>
                         location.href = ".$link.";
                    </script>
                ";
       
        }
            
        
        }



        
      

       

else{

}



