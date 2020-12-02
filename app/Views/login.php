<div id="logreg-forms">
    <?php if (session()->get('success')): ?>
        <div class="alert alert-success" role="alert">
            <?= session()->get('success') ?>
        </div>
    <?php endif; ?>
    <form class="form-signin" action="/" method="post">
        <h1 class="h3 mb-3 font-weight-normal" style="text-align: center">Inicio de Sesión</h1>
        <div class="form-group">
            <label for="email" class="m-0"><strong>Correo electrónico</strong></label>
            <input type="text" class="form-control" name="email" id="email" value="<?= set_value('email') ?>" placeholder="Introduce el correo electrónico.">
        </div>

        <div class="form-group">
            <label for="password" class="m-0"><strong>Contraseña</strong></label>
            <input type="password" class="form-control" name="password" id="password" value="" placeholder="Introduce la contraseña.">
        </div>

        <?php if (isset($validation)): ?>
            <div class="col-12">
                <div class="alert alert-danger" role="alert">
                    <?= $validation->listErrors() ?>
                </div>
            </div>
        <?php endif; ?>
        <hr>
        <div class="row">
            <div class="col-12 col-sm-12">
                <button class="btn btn-success btn-block m-0" type="submit"><i class="fas fa-sign-in-alt"></i> Iniciar sesión</button>
            </div>
            <div class="col-12 col-sm-6" hidden>
                <button class="btn btn-primary btn-block" type="button" onclick="location.href = '/register';"><i class="fas fa-user-plus"></i> Crear cuenta nueva.</button>
            </div>
        </div>
    </form>
</div>
