<div class="container">
    <div class="row">
        <div class="col-12">
            <?php print_r($alumno);?>
            <h2>Editar Alumno</h2>
            <form action="<?= base_url('alumno/update');?>" method="POST">
            <input type="hidden" name="id" value="<?= $alumno->id?>"/>
                <div class="mb-3">
                    <label for="" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" value="<?= $alumno->nombre?>" required="required" pattern="[a-zA-Z\n]{1,30}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Fecha de Nacimiento</label>
                        <input type="date" class="form-control" name="fechaNacimiento" id="fechaNacimiento" value=<?= $alumno->fechaNacimiento?> required="required">
                </div>

                <div class="mb-3">
                    <label for="sexo">Sexo</label>
                    <select name="sexo" id="sexo" class="form-control" required="required">
                        <?php if($alumno->sexo == "HOMBRE"): ?>
                            <option value="hombre" selected>Hombre</option>
                            <option value="mujer" >Mujer</option>
                        <?php else: ?>
                            <option value="hombre">Hombre</option>
                            <option value="mujer" selected>Mujer</option>
                        <?php endif ?>
                    </select>
                </div>

                <div class="mb-3">
                    <input type="submit" class="btn  btn-success">
                </div>
            </form>
        </div>
    </div>
</div>
