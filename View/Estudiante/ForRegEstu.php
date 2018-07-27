<?php
if ($_POST) {
    $id = $_POST["id"];

    $titulo = "Formulario de registro";
    $boton = "Almacenar";

    if ($id != 0) {
        $titulo = "Formulario de Edición";
        $boton = "Guardar Cambios";
        require '../../Class/Mysql/Datos.php';
        require '../../Class/Mysql/ConectarBD.php';
        $bd = new ConectarBD();
        $conn = $bd->getMysqli();
        $smtp = $conn->prepare("select * from persona where id = ?;");
        $smtp->bind_param("i",$id);
        $smtp->execute();
        $data = $smtp->get_result();
        $res["success"] = "no";
        $res["row"] = $data->num_rows;
        while ($fila = $data->fetch_assoc()) {
            $res[] = $fila;
            $res["success"] = "OK";
        }
        $smtp->close();
        $conn->close();
        ?>
        <script>
            var data = <?php echo json_encode($res); ?>;
            
            
            function carga(){
                var persona = data[0];
                $("#cc").val(persona.cc);
                $("#nombre").val(persona.nombre);
                $("#apellido").val(persona.apellido);
                $("#Telefono").val(persona.telefono);
                $("#fecha").val(persona.fechaNa);
                $("#Email").val(persona.email);
            }
            
            carga();
        </script>
        <?php
    } else {
        $id = "null";
    }
    ?>




    <form id="forEstCap" name="forEstCap">
        <fieldset class="col-lg-12">
            <legend><?= $titulo; ?></legend>
            <input type="hidden" id="id" name="id" value="<?= $id; ?>"/>

            <div class="form-group col-lg-6">
                <label for="ImputCC">Ingrese la CC</label>
                <input type="text" required  class="form-control" id="cc" name="cc" aria-describedby="CCHelp" placeholder="Ingrese la CC">
                <small id="CCHelp" class="form-text text-muted">Ingrese el Valor en numeros</small>
            </div>

            <div class="form-group col-lg-6">
                <label for="nomHelp">Ingrese Nombre</label>
                <input type="text" required class="form-control" id="nombre" name="nombre" aria-describedby="nombreHelp" placeholder="Ingrese nombre">
                <small id="nombreHelp" class="form-text text-muted">Ingrese Nombre</small>
            </div>

            <div class="form-group col-lg-6">
                <label for="nomHelp">Ingrese apellido</label>
                <input type="text" required class="form-control" id="apellido" name="apellido" aria-describedby="apellidoHelp" placeholder="Ingrese Apellido">
                <small id="ApellidoHelp" class="form-text text-muted">Ingrese Apellido</small>
            </div>


            <div class="form-group col-lg-6">
                <label for="nomHelp">Ingrese Telefono</label>
                <input type="text" required class="form-control" id="Telefono" name="Telefono" aria-describedby="TelefonoHelp" placeholder="Ingrese Telefono">
                <small id="TelefonoHelp" class="form-text text-muted">Ingrese Telefono</small>
            </div>

            <div class="form-group col-lg-6">
                <label for="nomHelp">Ingrese Email</label>
                <input type="email" required class="form-control" id="Email" name="Email" aria-describedby="EmailHelp" placeholder="Ingrese Email">
                <small id="EmailHelp" class="form-text text-muted">Ingrese Email</small>
            </div>


            <div class="form-group col-lg-6">
                <label for="exampleInputEmail1">Fecha Nacimiento</label>
                <input type="date" class="form-control" id="fecha" name="fecha" aria-describedby="emailHelp" placeholder="Ingrese Fecha de Nacimiento">
                <small id="fechaHelp" required class="form-text text-muted">Ingrese la fecha de Nacimiento</small>
            </div>
            <button type="submit" class="btn btn-primary"><?= $boton; ?></button>
        </fieldset>
    </form>
    <?php
} else {
    header("lcoation: ../.././");
}