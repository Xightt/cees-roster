<?php  if (count($errors) > 0) : ?>
    <?php foreach ($errors as $error) : ?>
        <div class="alert alert-danger alert-dismissable">
<!--            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>-->
            <?php echo $error ?>
        </div>
    <?php endforeach ?>
<?php  endif ?>
