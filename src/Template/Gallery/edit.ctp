<?php
/**
  * @var \App\View\AppView $this
  */
?>
<script>
    function addImage () {
        document.getElementById ("image").innerHTML = '<?= $this->Form->input('photo', ['type' => 'file']) ?>';
    }
</script>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $gallery->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $gallery->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Gallery'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="gallery form large-9 medium-8 columns content">
    <?= $this->Form->create($gallery, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Edit Gallery') ?></legend>
        <?php
            echo '<div id="image">
                <img src="'.DS.'files'.DS.'Gallery'.DS.'photo'.DS.$gallery ['photo'].'" width="200" height="200" />
                <button type="button" onclick="addImage()">Editar imagen</button>
            </div>';
            echo $this->Form->control('title');
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
