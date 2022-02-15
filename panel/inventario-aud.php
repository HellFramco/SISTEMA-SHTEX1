<?php
// require_once '../modelo/redireccion.php';
require '../modelo/datosInventarios.php';
require '../modelo/datos-productos.php';
$productos = new Productos();
$inventarios = new Inventarios();
$cant = 0;
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>



</head>

<body id="page-top">
    <style>
        .tr:hover{
            background-color: gray;
            color: white;
        }
    </style>
    <div id="contenedor_loading">
        <div id="loading"></div>
    </div>
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
        include 'menu.php';
        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php
                include 'top-bar.php';
                ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Botones que indican los colores en las tablas -->
                    <div style="align-items: center;" class="row justify-content-between p-2">
                        <h1 class="h3 mb-2 text-gray-800"><a href="index.php">General</a> / Inventarios </h1>
                        

                    </div>

                    
                    <div>
                      <div class="card">
                      <div class="card-body">

                      </div>
                    </div>
                    </div>
                    <!-- Botones que indican los colores en las tablas -->

                    <!-- Page Heading -->
                    <!-- DataTales Example -->
                    
                    















<input type="hidden" value="1" id="op">






                    <div class="col-sm-12">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="table-responsive">
                                    
                                        <?php
                                            if($_POST['accion'] == 'update'){ echo "<pre>"; var_dump($_POST); echo "</pre>"; }

                                        ?>
                                        
                                    <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>referencia</th>
                                                <th>Estado</th>
                                              
                                                <th>marca</th>
                                                <th>tipo</th>
                                                <th>silueta</th>
                                      
                                                
                                             
                                              
                                                <th>bodega</th>
                                                <th>ruta</th>
                                                <th>color</th>
                                 
                                                <th>talla 6 </th>
                                                <th>talla 8 </th>
                                                <th>talla 10 </th>
                                                <th>talla 12 </th>
                                                <th>talla 14 </th>
                                                <th>talla 16 </th>
                                                <th>talla 18 </th>
                                                <th>talla 20 </th>
                                                <!-- <th>talla 26 </th>
                                                <th>talla 28 </th>
                                                <th>talla 30 </th>
                                                <th>talla 32 </th> -->
                                                <th>talla 34 </th>
                                                <th>talla 36 </th>
                                                <th>talla 38 </th>
                                                <th>talla S </th>
                                                <th>talla m </th>
                                                <th>talla l </th>
                                                <th>talla xl </th>
                                                <th>talla u </th>
                                                <th>talla est </th>
                                                <th>Total</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $item = 1;
                                            foreach ($inventarios->verInventarioAuditor() as $key) {
                                              $cantidad = $key['talla6'] + $key['talla8'] + $key['talla10'] + $key['talla12'] +  $key['talla14'] + $key['talla16'] + $key['talla18'] + $key['talla20'] + $key['talla26'] + $key['talla28'] + $key['talla30'] + $key['talla32'] + $key['talla34'] + $key['talla36'];
                                              $cantidad = $cantidad + $key['talla38'] +  $key['tallas'] + $key['tallam'] + $key['tallal'] + $key['tallaxl'] + $key['tallau'] + $key['tallaest'];
                                            ?>
                                            
                                                <tr class=" tr">
                                                <form action="" method="post">
                                                    <td><input type="text" name="id" readonly value="<?php echo $key['id_inventario']; ?>"></td>
                                                    <td><?php echo $key['referencia']; ?> R<?php echo $key['reprogramacion']; ?></td>
                                                    <td><?php echo $key['estado']; ?></td>
                                          
                                                    <td><?php echo $key['marca']; ?></td>
                                                    <td><?php echo $key['tipo']; ?></td>
                                                    <td><?php echo $key['silueta']; ?></td>
                                                    <td><?php echo $key['bodega']; ?></td>
                                                    <td><?php echo $key['ruta']; ?></td>
                                                    <td><?php echo $key['color']; ?></td>
                                                    <td><input type="text" name="talla6" value="<?php echo $key['talla6']; ?>"></td>
                                                    <td><input type="text" name="talla8" value="<?php echo $key['talla8']; ?>"></td>
                                                    <td><input type="text" name="talla10" value="<?php echo $key['talla10']; ?>"></td>
                                                    <td><input type="text" name="talla12" value="<?php echo $key['talla12']; ?>"></td>
                                                    <td><input type="text" name="talla14" value="<?php echo $key['talla14']; ?>"></td>
                                                    <td><input type="text" name="talla16" value="<?php echo $key['talla16']; ?>"></td>
                                                    <td><input type="text" name="talla18" value="<?php echo $key['talla18']; ?>"></td>
                                                    <td><input type="text" name="talla20" value="<?php echo $key['talla20']; ?>"></td>
                                                    <!-- <td><input type="text" value="<?php echo $key['talla26']; ?>"></td>
                                                    <td><input type="text" value="<?php echo $key['talla28']; ?>"></td>
                                                    <td><input type="text" value="<?php echo $key['talla30']; ?>"></td>
                                                    <td><input type="text" value="<?php echo $key['talla32']; ?>"></td> -->
                                                    <td><input type="text" name="talla34" value="<?php echo $key['talla34']; ?>"></td>
                                                    <td><input type="text" name="talla36" value="<?php echo $key['talla36']; ?>"></td>
                                                    <td><input type="text" name="talla38" value="<?php echo $key['talla38']; ?>"></td>
                                                    <td><input type="text" name="tallas" value="<?php echo $key['tallas']; ?>"></td>
                                                    <td><input type="text" name="tallam" value="<?php echo $key['tallam']; ?>"></td>
                                                    <td><input type="text" name="tallal" value="<?php echo $key['tallal']; ?>"></td>
                                                    <td><input type="text" name="tallaxl" value="<?php echo $key['tallaxl']; ?>"></td>
                                                    <td><input type="text" name="tallau" value="<?php echo $key['tallau']; ?>"></td>
                                                    <td><input type="text" name="tallaest" value="<?php echo $key['tallaest']; ?>"></td>
                                                    
                                                    <td><?php echo $cantidad; ?></td>
                                                    <td>
                                                        <input type="hidden" name="accion" value="update">
                                                        <input type="submit" value="Update">
                                                    </td>
                                                    
                                                    </form>
                                                </tr>
                                                
                                            <?php
                                                $item++;
                                            }
                                            ?>


                                        </tbody>
                                       
                                    </table>
                                    
                                </div>
                                <a href="ventas-detalles.php?>">
                                    <!-- <button class="btn btn-success" data-toggle="modal" data-target="" onclick="" title="Nueva Orden"><i class="fas fa-plus"></i> Nueva Orden</button><br /> -->
                                </a>
                            </div>
                        </div>
                    </div>


                </div>




            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php
            include 'footer.php';
            ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>



    <!-- modal necesario para el funcionamiento del logout -->

    <!-- libreria necesaria para el funcionamiento de data table -->
    <?php include './librerias_js/librerias_js-inventario.php' ?>



  


<script >

function option(op){
    document.getElementById("op").value = op;

}





$.fn.dataTable.ext.search.push(
    function( settings, data, dataIndex ) {
        var min = parseInt( $('#min').val(), 10 );
        var max = parseInt( $('#max').val(), 10 );
        var min1 = parseInt( $('#min1').val(), 10 );
        var max1 = parseInt( $('#max1').val(), 10 );

        var min2 = parseInt( $('#min2').val(), 10 );
        var max2 = parseInt( $('#max2').val(), 10 );

        var min3 = parseInt( $('#min3').val(), 10 );
        var max3 = parseInt( $('#max3').val(), 10 );

        var min4 = parseInt( $('#min4').val(), 10 );
        var max4 = parseInt( $('#max4').val(), 10 );

        var min5 = parseInt( $('#min5').val(), 10 );
        var max5 = parseInt( $('#max5').val(), 10 );
        
        var min6 = parseInt( $('#min6').val(), 10 );
        var max6 = parseInt( $('#max6').val(), 10 );

        var min7 = parseInt( $('#min7').val(), 10 );
        var max7 = parseInt( $('#max7').val(), 10 );

        var min8 = parseInt( $('#min8').val(), 10 );
        var max8 = parseInt( $('#max8').val(), 10 );

        var min9 = parseInt( $('#min9').val(), 10 );
        var max9 = parseInt( $('#max9').val(), 10 );

        var min10 = parseInt( $('#min10').val(), 10 );
        var max10 = parseInt( $('#max10').val(), 10 );

        var min11 = parseInt( $('#min11').val(), 10 );
        var max11 = parseInt( $('#max11').val(), 10 );

        var min12 = parseInt( $('#min12').val(), 10 );
        var max12 = parseInt( $('#max12').val(), 10 );

        var min13 = parseInt( $('#min13').val(), 10 );
        var max13 = parseInt( $('#max13').val(), 10 );

        var min14 = parseInt( $('#min14').val(), 10 );
        var max14 = parseInt( $('#max14').val(), 10 );

        var min15 = parseInt( $('#min15').val(), 10 );
        var max15 = parseInt( $('#max15').val(), 10 );

        var min16 = parseInt( $('#min16').val(), 10 );
        var max16 = parseInt( $('#max16').val(), 10 );

        var min17 = parseInt( $('#min17').val(), 10 );
        var max17 = parseInt( $('#max17').val(), 10 );

        var min18 = parseInt( $('#min18').val(), 10 );
        var max18 = parseInt( $('#max18').val(), 10 );

        var min19 = parseInt( $('#min19').val(), 10 );
        var max19 = parseInt( $('#max19').val(), 10 );

        var min20 = parseInt( $('#min20').val(), 10 );
        var max20 = parseInt( $('#max20').val(), 10 );


        var t6 = parseFloat( data[19] ) || 0; // use data for the age column
        var t8 = parseFloat( data[20] ) || 0; // use data for the age column
        var t10 = parseFloat( data[21] ) || 0; // use data for the age column
        var t12 = parseFloat( data[22] ) || 0; // use data for the age column
        var t14 = parseFloat( data[23] ) || 0; // use data for the age column
        var t16 = parseFloat( data[24] ) || 0; // use data for the age column
        var t18 = parseFloat( data[25] ) || 0; // use data for the age column
        var t20 = parseFloat( data[26] ) || 0; // use data for the age column
        var t26 = parseFloat( data[27] ) || 0; // use data for the age column
        var t28 = parseFloat( data[28] ) || 0; // use data for the age column
        var t30 = parseFloat( data[29] ) || 0; // use data for the age column
        var t32 = parseFloat( data[30] ) || 0; // use data for the age column
        var t34 = parseFloat( data[31] ) || 0; // use data for the age column
        var t36 = parseFloat( data[32] ) || 0; // use data for the age column
        var t38 = parseFloat( data[33] ) || 0; // use data for the age column
        var ts = parseFloat( data[34] ) || 0; // use data for the age column
        var tm = parseFloat( data[35] ) || 0; // use data for the age column
        var tl = parseFloat( data[36] ) || 0; // use data for the age column
        var txl = parseFloat( data[37] ) || 0; // use data for the age column
        var tu = parseFloat( data[38] ) || 0; // use data for the age column
        var test = parseFloat( data[39] ) || 0; // use data for the age column


var op = document.getElementById("op").value;


          
    
        if(op=="1"){
            if ( ( isNaN( min ) && isNaN( max ) ) ||
                    ( isNaN( min ) && t6 <= max ) ||
                    ( min <= t6   && isNaN( max ) ) ||
                    ( min <= t6   && t6 <= max ) )
                {
                    return true;
                }


            


        }else if(op=="2"){
      

            if ( ( isNaN( min1 ) && isNaN( max1 ) ) ||
                    ( isNaN( min1 ) && t8 <= max1 ) ||
                    ( min1 <= t8   && isNaN( max1 ) ) ||
                    ( min1 <= t8   && t8 <= max1 ) )
                {
                    return true;
                }


        }else if(op=="3"){
            if ( ( isNaN( min2 ) && isNaN( max2 ) ) ||
                    ( isNaN( min2 ) && t10 <= max2 ) ||
                    ( min2 <= t10   && isNaN( max2 ) ) ||
                    ( min2 <= t10   && t10 <= max2 ) )
                {
                    return true;
                }


        }else if(op=="4"){
            if ( ( isNaN( min3 ) && isNaN( max3 ) ) ||
                    ( isNaN( min3 ) && t12 <= max3 ) ||
                    ( min3 <= t12   && isNaN( max3 ) ) ||
                    ( min3 <= t12   && t12 <= max3 ) )
                {
                    return true;
                }


        }else if(op=="5"){
            if ( ( isNaN( min4 ) && isNaN( max4 ) ) ||
                    ( isNaN( min4 ) && t14 <= max4 ) ||
                    ( min4 <= t14   && isNaN( max4 ) ) ||
                    ( min4 <= t14   && t14 <= max4 ) )
                {
                    return true;
                }


        }else if(op=="6"){
            if ( ( isNaN( min5 ) && isNaN( max5 ) ) ||
                    ( isNaN( min5 ) && t16 <= max5 ) ||
                    ( min5 <= t16   && isNaN( max5 ) ) ||
                    ( min5 <= t16   && t16 <= max5 ) )
                {
                    return true;
                }


        }else if(op=="7"){
            if ( ( isNaN( min6 ) && isNaN( max6 ) ) ||
                    ( isNaN( min6 ) && t18 <= max6 ) ||
                    ( min6 <= t18   && isNaN( max6 ) ) ||
                    ( min6 <= t18   && t18 <= max6 ) )
                {
                    return true;
                }


        }else if(op=="8"){
            if ( ( isNaN( min7 ) && isNaN( max7 ) ) ||
                    ( isNaN( min7 ) && t20 <= max7 ) ||
                    ( min7 <= t20   && isNaN( max7 ) ) ||
                    ( min7 <= t20   && t20 <= max7 ) )
                {
                    return true;
                }


        }else if(op=="9"){
            if ( ( isNaN( min8 ) && isNaN( max8 ) ) ||
                    ( isNaN( min8 ) && t26 <= max8 ) ||
                    ( min8 <= t26   && isNaN( max8 ) ) ||
                    ( min8 <= t26   && t26 <= max8 ) )
                {
                    return true;
                }


        }else if(op=="10"){
            if ( ( isNaN( min9 ) && isNaN( max9 ) ) ||
                    ( isNaN( min9 ) && t28 <= max9 ) ||
                    ( min9 <= t28   && isNaN( max9 ) ) ||
                    ( min9 <= t28   && t28 <= max9 ) )
                {
                    return true;
                }


        }else if(op=="11"){
            if ( ( isNaN( min10 ) && isNaN( max10 ) ) ||
                    ( isNaN( min10 ) && t30 <= max10 ) ||
                    ( min10 <= t30   && isNaN( max10 ) ) ||
                    ( min10 <= t30   && t30 <= max10 ) )
                {
                    return true;
                }


        }else if(op=="12"){
            if ( ( isNaN( min11 ) && isNaN( max11 ) ) ||
                    ( isNaN( min11 ) && t32 <= max11 ) ||
                    ( min11 <= t32   && isNaN( max11 ) ) ||
                    ( min11 <= t32   && t32 <= max11 ) )
                {
                    return true;
                }


        }else if(op=="13"){
            if ( ( isNaN( min12 ) && isNaN( max12 ) ) ||
                    ( isNaN( min12 ) && t34 <= max12 ) ||
                    ( min12 <= t34   && isNaN( max12 ) ) ||
                    ( min12 <= t34   && t34 <= max12 ) )
                {
                    return true;
                }


        }else if(op=="14"){
            if ( ( isNaN( min13 ) && isNaN( max13 ) ) ||
                    ( isNaN( min13 ) && t36 <= max13 ) ||
                    ( min13 <= t36   && isNaN( max13 ) ) ||
                    ( min13 <= t36   && t36 <= max13 ) )
                {
                    return true;
                }


        }else if(op=="15"){
            if ( ( isNaN( min14 ) && isNaN( max14 ) ) ||
                    ( isNaN( min14 ) && t38 <= max14 ) ||
                    ( min14 <= t38   && isNaN( max14 ) ) ||
                    ( min14 <= t38   && t38 <= max14 ) )
                {
                    return true;
                }


        }else if(op=="16"){
            if ( ( isNaN( min15 ) && isNaN( max15 ) ) ||
                    ( isNaN( min15 ) && ts <= max15 ) ||
                    ( min15 <= ts   && isNaN( max15 ) ) ||
                    ( min15 <= ts   && ts <= max15 ) )
                {
                    return true;
                }


        }else if(op=="17"){
            if ( ( isNaN( min16 ) && isNaN( max16 ) ) ||
                    ( isNaN( min16 ) && tm <= max16 ) ||
                    ( min16 <= tm   && isNaN( max16 ) ) ||
                    ( min16 <= tm   && tm <= max16 ) )
                {
                    return true;
                }


        }else if(op=="18"){
            if ( ( isNaN( min17 ) && isNaN( max17 ) ) ||
                    ( isNaN( min17 ) && tl <= max17 ) ||
                    ( min17 <= tl   && isNaN( max17 ) ) ||
                    ( min17 <= tl   && tl <= max17 ) )
                {
                    return true;
                }


        }else if(op=="19"){
            if ( ( isNaN( min18 ) && isNaN( max18 ) ) ||
                    ( isNaN( min18 ) && txl <= max18 ) ||
                    ( min18 <= txl  && isNaN( max18 ) ) ||
                    ( min18 <= txl   && txl <= max18 ) )
                {
                    return true;
                }


        }else if(op=="20"){
            if ( ( isNaN( min19 ) && isNaN( max19 ) ) ||
                    ( isNaN( min19 ) && tu <= max19 ) ||
                    ( min19 <= tu   && isNaN( max19 ) ) ||
                    ( min19 <= tu   && tu <= max19 ) )
                {
                    return true;
                }


        }else if(op=="21"){
            if ( ( isNaN( min20 ) && isNaN( max20 ) ) ||
                    ( isNaN( min20 ) && test <= max20 ) ||
                    ( min20 <= test   && isNaN( max20 ) ) ||
                    ( min20 <= test   && test <= max20 ) )
                {
                    return true;
                }


        }


        
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
        

    

     
    
        return false;
    }
);
 
$(document).ready(function() {
    var table = $('#example').DataTable();
     
    // Event listener to the two range filtering inputs to redraw on input
    $('#min, #max, #min1, #max1, #min2, #max2, #min3, #max3, #min4, #max4, #min5, #max5, #min6, #max6, #min7, #max7, #min8, #max8, #min9, #max9, #min10, #max10, #min11, #max11, #min12, #max12, #min13, #max13, #min14, #max14, #min15, #max15, #min16, #max16, #min17, #max17, #min18, #max18, #min19, #max19, #min20, #max20').keyup( function() {
        table.draw();
    } );

} );

    </script>


    <script>
        window.onload = function() {
            var contenedor = document.getElementById("contenedor_loading");
            contenedor.style.visibility = "hidden";
            contenedor.style.opacity = "0";
        };
    </script>
</body>

</html>