<div class="container">
    <div class="row">
    <?php  
    if (isset($validation)) {
        print $validation->ListErrors();
    }
    ?>
        <div class="col-12">
            <h2>Agregar Alumno</h2>
            <form action="<?= base_url('alumno/agregar2');?>" method="POST">
            <?= csrf_field() ?>
                <div class="mb-3">
                    <label for="" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label" >Fecha de Nacimiento</label>
                        <input type="date" class="form-control" name="fechaNacimiento" id="fechaNacimiento">
                </div>

                <div class="mb-3">
                    <label for="sexo">Sexo</label>
                    <select name="sexo" id="sexo" class="form-control" >
                        <option value="hombre">Hombre</option>
                        <option value="mujer">Mujer</option>
                    </select>
                </div>
                <div class="mv-3">
                <label for="" class="form-label">Grupo</label>
                    <select name="idgrupo" class="form-control">
                        <?php foreach ($grupos as $grupo):?>
                            <option value="<?=$grupo->idgrupo?>"><?=$grupo->grupo?></option>
                        <?php endforeach?>
                    </select>
                </div>

                <div class="mv-3">
                <label for="" class="form-label">Grado</label>
                <select name="idgrado" class="form-control">
                        <?php foreach ($grados as $grado):?>
                            <option value="<?=$grado->idgrado?>"><?=$grado->grado?></option>
                        <?php endforeach?>
                    </select>
                </div>

                <div class="mb-3">
                    <input type="submit" class="btn  btn-success">
                </div>
            </form>
        </div>
    </div>
</div>
