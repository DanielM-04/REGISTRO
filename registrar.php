<?php

include("conexion.php");

if(isset ($_POST['registrar'])){
    if(
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['lastname']) >= 1 &&
        strlen($_POST['acudiente']) >= 1 &&
        strlen($_POST['lastnameAcu']) >= 1 &&
        strlen($_POST['parentesco']) >= 1 &&
        strlen($_POST['phone']) >= 1
        )  {
            $name = trim($_POST['name']);
            $lastname = trim($_POST['lastname']);
            $acudiente = trim($_POST['acudiente']);
            $lastnameAcu = trim($_POST['lastnameAcu']); 
            $parentesco = trim($_POST['parentesco']);
            $phone = trim($_POST['phone']);
            $fecha = date("d/m/y");
            $consulta ="INSERT INTO datos(nombre, apellido, nombre_acudiente, apellido_acudiente, parentesco, telefono, fecha)
                 VALUES('$name', '$lastname', '$acudiente', '$lastnameAcu', '$parentesco','$phone', '$fecha')";            
            $resultado = mysqli_query($conex, $consulta);
            if ($resultado) {
                ?>
                <h3 class="success"> Registro Exitoso</h3>
                <?php  
                } else {
                 ?>
                    <h3 class="error">Ocurrio un error</h3>
                <?php 
          }
            
    }
}
?>  