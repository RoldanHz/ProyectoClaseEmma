<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Alumnos</h2>
            
            <table class="table">
                <thead>
                    <th>Nombre</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Sexo</th>  
                </thead>
                <tbody>
                <?php foreach ($alumnos as $alumno): ?>
                    <tr>
                        <td><?= $alumno->nombre?></td>
                        <td><?= $alumno->fechaNacimiento?></td>
                        <td><?= $alumno->sexo?></td>
                        <td><?= $alumno->idgrado?></td>
                        <td><?= $alumno->idgrupo?></td>
                        <td>
                            <a href="<?=base_url('alumno/delete/'.$alumno->id);?>">Eliminar</a>
                            <a href="<?=base_url('alumno/editar/'.$alumno->id);?>">Editar</a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

        </div>
    </div>
</div>
