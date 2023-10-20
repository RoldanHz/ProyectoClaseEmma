<div class="container">
    <div class="row">
        <div class="col-12">

            <form action="<?= base_url('materia/buscar/') ?>" method="GET">
                <label for="nombre">Nombre de la Materia</label>
                <input type="text" class="form-control" name="nombre">
                <label for="nombreCorto">Nombre Corto de la Materia</label>
                <input type="text" class="form-control" name="nombreCorto">
                <label for="clave">Clave de la Materia</label>
                <input type="text" class="form-control" name="clave">
                
                <input type="submit" class="btn btn-success mt-4" value="Buscar">

            </form>
        </div>
    </div>
    <?php
    if(isset($materias)){
        //print_r($materias);
    }
    ?>
    <div class="row">
        <div class="col-12" align="center">
            <table class="table">
                <thead align="center">
                    <th>Materia</th>
                    <th>Nombre Corto</th>
                    <th>Clave</th>
                    <th>No. de Unidades</th>
                </thead>
                <tbody align="center">
                    <?php foreach($materias as $materia):?>
                    <tr>
                        <td><?=$materia->nombre?></td>
                        <td><?=$materia->nombreCorto?></td>
                        <td><?=$materia->clave?></td>
                        <td><?=$materia->noUnidades?></td>
                    </tr>
                    <?php endforeach?>
                </tbody>
            </table>
        </div>
    </div>
</div>