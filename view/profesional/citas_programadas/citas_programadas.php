<?php
include "../../../controller/sesiones/sesiones_prof.php";
include "../../../controller/conexion-db/db_connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profesional</title>
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../assets/css/profesional-css/estilos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!--  Datatables  -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>  

    <!--  extension responsive  -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@800&display=swap');
    </style>
</head>
<body>
    <header>
        <div class="container__menu">
            <div class="logo">
                <img src="../../assets/images/Logo2.png" alt="">
            </div>
            <div class="menu">
                <i class="fas fa-bars" id="btn_menu"></i>
                <div id="back_menu"></div>
                <nav id="nav">
                    <img src="../../assets/images/ajustes.png" alt="">
                    <ul>
                        <li><a href="../index_prof.php" >Inicio</a></li>
                        <li><a href="../../../controller/sesiones/cerrarsesion.php">Cerrar sesion</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main>
        <div class="container__cover">
            <div class="cover"> 
                <div class="caja3">
                    <h1>Citas Programadas</h1>
                    <div class="row">
                        <div class="col-lg-12">
                            <?php
                                $consulta = "SELECT * FROM citas WHERE id_prof = $_SESSION[id_pers]";
                                $resultado = mysqli_query($conectar, $consulta);
                                $fila = mysqli_fetch_assoc($resultado);
                                $consulta2 = "SELECT * FROM personas JOIN citas WHERE id_pers = id_pac";
                                $resultado2 = mysqli_query($conectar, $consulta2);
                                //$datos = mysqli_fetch_assoc($resultado2);
                                if (mysqli_num_rows($resultado)>0) {
                                    echo "<table id='example' class='table table-bordered  display nowrap' cellspacing='0' width='100%'>
                                            <thead>
                                                <tr>
                                                    <th>Nombre Paciente</th>
                                                    <th>Documento</th>
                                                    <th>Fecha Agendada</th>
                                                    <th>Hora Agendada</th>
                                                    <th>Valor Cita</th>
                                                    <th>Asistencia</th>
                                                </tr>
                                            </thead>
                                        <tbody>";
                                        while ($datos = mysqli_fetch_assoc($resultado2)) {
                                            echo "<tr>
                                                    <td>";echo $datos['p_nombre_pers'], $datos['s_nombre_pers'], $datos['p_apellido_pers'], $datos['s_apellido_pers']; echo "</td>
                                                    <td>";echo $datos['num_doc_pers']; echo "</td>
                                                    <td>";echo $fila['fecha_cita']; echo"</td>
                                                    <td>";echo $fila['hora_cita']; echo"</td>
                                                    <td>";echo"</td>
                                                    <td>";
                                                        echo "<button type='submit'>Asistencia</button>";
                                                    echo "</td>
                                                </tr>";
                                        }
                                        echo "</tbody>";
                                    echo "</table>";    
                                }
                            ?>
                             
                        </div>
                    </div> 
                </div>
            </div> 
        </div>
    </main>
    <script src="../../assets/js-general/menu-responsive.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
            
    <!--   Datatables-->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>  
      
    <!-- extension responsive -->
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script>
        function enviarform(){
            window.location = "new_espec.php"
        }
        $(document).ready(function() {
            $('#example').DataTable({
                responsive: true
            });
        } );  
    </script>
</body>
</html>