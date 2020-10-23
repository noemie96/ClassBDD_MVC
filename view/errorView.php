<?php $title = 'Mon blog - erreur 404';?>
<?php
    header("HTTP/1.0 404 Found");
?>
<?php ob_start(); ?>
<h1>Error 404</h1>
    <p><?=  $errorMessage; ?></p>

<?php $content = ob_end_clean();?>
<?php require('template.php'); ?>