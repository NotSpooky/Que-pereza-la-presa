<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Post $post
  */
?>
<!-- El padding bottom es para arreglar un bug -->
<div class="posts view large-9 medium-8 columns content" style="padding-bottom: 0px;">
    <h3><?= h($post->title) ?></h3>
    <h6>Última edición: <?= $post->modified ?>, Creado por <?= $post->author ?></h6>
    <?php if (isset ($post->photo) && $post->photo != '') {
        echo '<img src="'.DS.'files'.DS.'Posts'.DS.'photo'.DS.$post -> photo.'" />';
    } ?>
    <p><?= $post->text ?></p>
    <br />
    <?= $this->Form->create($comment) ?>
        <fieldset>
            <legend><?= __('Add Comment') ?></legend>
            <?php
                echo $this->Form->control('username');
                echo $this->Form->control('email');
                echo $this->Form->control('text');
            ?>
        </fieldset>
        <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
    <br />
    <div class="related">
        <h4><?= __('Comments') ?></h4>
        <?php if (!empty($post->comments)): ?>
        <table cellpadding="0" cellspacing="0">
            <?php foreach ($post->comments as $comment): ?>
            <h5><span style="color:blue"><?= h($comment->username) ?></span> dijo el <?= $comment->created ?>:</h5>
            <p><?= h($comment->text) ?></p>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

