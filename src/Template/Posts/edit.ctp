<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $post->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $post->title)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Posts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Comments'), ['controller' => 'Comments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Comment'), ['controller' => 'Comments', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="posts form large-9 medium-8 columns content">
    <?= $this->Form->create($post, ['type' => 'file']) ?>
    <fieldset id="form">
        <legend><?= __('Edit Post') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo '<div id="image">
                <img src="'.DS.'files'.DS.'Posts'.DS.'photo'.DS.$post ['photo'].'" width="200" height="200" />
                <button type="button" onclick="addImage()">Editar imagen</button>
            </div>';
            echo $this->Form->control('summary');
            echo $this->Form->control('text');
            echo $this->Form->control('author');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
<script>
    function addImage () {
        var para = document.createElement("p");
        var node = document.createTextNode ("sleep");
        para.appendChild (node);
        document.getElementById ("image").innerHTML = '<?= $this->Form->input('photo', ['type' => 'file']) ?>';
        //document.getElementById("image").insertBefore (document.createElement ("p"), document.getElementById("summary"));
    }
</script>
