<?php if (count($errors) > 0) : ?>
    <div class="alert alert-warning d-flex align-items-center msg" role="alert">
        <div>
            <?php foreach ($errors as $error) : ?>
                <?php echo $error; ?>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>