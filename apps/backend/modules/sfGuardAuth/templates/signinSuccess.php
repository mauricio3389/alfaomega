<?php if ($form->hasErrors()): ?>
    <div class="flash_error">
        <strong>Error</strong>: El nombre de usuario o contraseña no son válidos.
    </div>
<?php endif; ?>
<center>
<div class="large-4">
        <form action="<?php echo url_for('@sf_guard_signin') ?>" method="post">

            <label class="unico" for="signin_username">
                Nombre de usuario
            </label>
            <?php echo $form['username'] ?>

            <label class="unico" for="signin_password">
                Contraseña
            </label>
            <?php echo $form['password'] ?>

            <p><label for="signin_remember">Recordarme</label>
            <?php echo $form['remember']->render() ?></p>
            <button class="button [tiny small large]" type="submit">Iniciar Sesión</button>

            <?php echo $form['_csrf_token'] ?>
    </form>

    <a href="<?php echo url_for('@sf_guard_password'); ?>"><?php echo ('¿Problemas para acceder a su cuenta?') ?></a>

</div>
    </center>