<?php $title = $post->title ; ?>

<?php ob_start(); ?>

<h1>Mon blog</h1>
<p><a href="index.php">Retour</a></p>

<div class="new">
    <h3>
        <?= $post->title; ?>
        <em>le <?= $post->date; ?></em>
    </h3>
    <p>
        <?= nl2br($post->content) ?>
    </p>
</div>

<h1>Commentaires:</h1> <!--la je veux mes commentaire mais je ne sais pas combien y en a donc boucle-->
<?php foreach($comments as $comment) : ?> <!--boucle le nombre de commentaire qu'il y en ai ( 5 10 OU 100)-->
    <div class="comments">
        <p><strong><?= $comment->author ?></strong> le <?= $comment->date ?></p>
        <p><?= nl2br($comment->comment) ?></p>
    </div>
<?php endforeach;?>

<?php $content = ob_get_clean(); ?> <!--tout ce qui se trouve entre les ob_ sera afficher grace au $content dans le template-->

<?php require('template.php'); ?>

    
