<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Post $post
  */
?>
<div class="posts view large-9 medium-8 columns content">
    <h3><?= h($post->title) ?></h3>
    <?php if (isset ($post->photo) && $post->photo != '') {
        echo '<img src="'.DS.'files'.DS.'Posts'.DS.'photo'.DS.$post -> photo.'" />';
    } ?>
    <p><?= $post->text ?></p>
    <div class="related">
        <h4><?= __('Comments') ?></h4>
        <?php if (!empty($post->comments)): ?>
        <table cellpadding="0" cellspacing="0">
            <?php foreach ($post->comments as $comments): ?>
            <h5><?= h($comments->username) ?></h5>
            <?= h($comments->text) ?>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
