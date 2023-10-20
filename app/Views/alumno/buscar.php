<div class="container">
    <div class="row">
        <div class="col-12">

            <form action="<?= base_url('alumno/buscar/') ?>" method="GET">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" pattern="[a-zA-Z\n]{1,30}">
                <label for="sexo">Sexo</label>
                <select name="sexo" class="form-control">
                    <option value=""></option>
                    <option value="HOMBRE">Hombre</option>
                    <option value="MUJER">Mujer</option>
                </select>
                <input type="submit" class="btn btn-success mt-4" value="Buscar">

            </form>
        </div>
    </div>
    <?php
    if(isset($alumnos)){
        //print_r($alumnos);
    }
    ?>
    <div class="row">
        <div class="col-12">
            <table>
                <thead>
                    <th>Sexo</th>
                    <th>Nombre</th>
                </thead>
                <tbody>
                    <?php foreach($alumnos as $alumno):?>
                    <tr>
                        <td><?=$alumno->nombre?></td>
                        <td><?=$alumno->sexo?></td>
                    </tr>
                    <?php endforeach?>
                </tbody>
            </table>
        </div>
    </div>
</div>