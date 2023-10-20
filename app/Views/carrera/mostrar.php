<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Carreras</h2>
            <?php
    if(isset($carreras)){
        //print_r($carreras);
    }
    ?>
            
            <table class="table">
                <thead>
                    <th>Nombre de la carrera</th>
                    <th>Acrónimo</th>
                </thead>
                <tbody>
                <?php foreach ($carreras as $carrera): ?>
                    <tr>
                        <td><?= $carrera->nombre?></td>
                        <td><?= $carrera->acronimo?></td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

        </div>
    </div>
</div>
