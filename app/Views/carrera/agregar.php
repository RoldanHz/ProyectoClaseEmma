<div class="container">
    <div class="row">
        <?=  $validation->ListErrors() ?>
        <div class="col-12">
            <h2>Agregar Carrera</h2>
            <form action="<?= base_url('carrera/agregar'); ?>" method="POST">
                <?= csrf_field() ?>
                <div class="mb-3">
                    <label for="" class="form-label">Nombre de la Carrera</label>
                    <input type="text" class="form-control" name="carrera">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label" required="required">Acrónimo</label>
                    <input type="text" class="form-control" name="acronimo">
                </div>

                <div class="mb-3">
                    <input type="submit" class="btn  btn-success">
                </div>
            </form>
        </div>
    </div>
</div>