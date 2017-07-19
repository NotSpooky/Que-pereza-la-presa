<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Post $post
  */
?>
<div class="posts view large-9 medium-8 columns" role="content">
    <div class="main">
        <h3><?= h($post->title) ?></h3>
        <h6>Última edición: <?= $post->modified->format('d/m/Y') ?></h6>
        <?php if (isset ($post->photo) && $post->photo != '') {
            echo '<img src="'.DS.'files'.DS.'Posts'.DS.'photo'.DS.$post -> photo.'" />';
        } ?>
        <p><?= str_replace("\n", "<br />", $post->text) ?></p>
        <h6>Creado por <?= $post->author ?></h6>
        <br />
        <hr />
        <h4><?= __('Comments') ?></h4>
        <?= $this->Form->create($comment) ?>
            <fieldset>
                <legend><?= __('Add Comment') ?></legend>
                <?php
                    echo $this->Form->control('username');
                    echo $this->Form->control('email');
                    echo $this->Form->control('text');
                ?>
                <?= $this->Form->button('Enviar comentario') ?>
            </fieldset>
        <?= $this->Form->end() ?>
        <br />
        <div class="related">
            <?php if (!empty($post->comments)): ?>
            <table cellpadding="0" cellspacing="0">
                <?php foreach ($post->comments as $comment): ?>
                <h5><span style="color:blue"><?= h($comment->username) ?></span> dijo el <?= $comment->created->format('d/m/Y') ?>:</h5>
                    <p style="margin-left: 3%;"><?= h($comment->text) ?></p>
                <?php endforeach; ?>
            </table>
            <?php endif; ?>
        </div>
    </div>
</div>

