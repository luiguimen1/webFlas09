<fieldset>
    <legend>Captura de datos</legend>
    <form id="forCrTa" name="forCrTa" autocomplete="off">
    <div class="row">
        
        <div class="col-lg-6">
            <div class="form-group">
                <label for="exampleInputEmail1">Ingrese un Correo</label>
                <input type="email" class="form-control" id="correo" name="correo" required aria-describedby="numeroHelp" placeholder="Inrgese correo">
                <small id="numeroHelp" class="form-text text-muted">Su correo</small>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="exampleInputEmail1">Confirme su correo</label>
                <input type="email" class="form-control" id="correo1" name="correo1" aria-describedby="numeroHelp" placeholder="Inrgese correo">
                <small id="numeroHelp" class="form-text text-muted">Su correo</small>
            </div>
        </div>
        
        
        
        <div class="col-lg-6">
            <div class="form-group">
                <label for="exampleInputEmail1">Ingrese un Numero</label>
                <input type="number" class="form-control" id="numero" name="numero" required max="50" min="10" aria-describedby="numeroHelp" placeholder="Ingrese un numero">
                <small id="numeroHelp" class="form-text text-muted">Es le numero de la tabla a crear</small>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="exampleInputEmail1">Ingrese un Numero</label>
                <input type="text" class="form-control" autocomplete="off" id="limite" name="limite" aria-describedby="limiteHelp" placeholder="Ingrese un numero">
                <small id="limiteHelp" class="form-text text-muted">Es le numero que sera el limite de tabla a crear</small>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Crear</button>
    </form>
</fieldset>


<fieldset class="col-lg-12">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Numero</th>
                <th>*</th>
                <th>numero</th>
                <th>=</th>
                <th>Resultado</th>
            </tr>
        </thead>
        <tbody id="listaResul">
            
        </tbody>
    </table>
</fieldset>