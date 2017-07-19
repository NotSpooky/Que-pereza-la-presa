<?php
/**
  * @var \App\View\AppView $this
  */
?>
<!--nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li>< ?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $about->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $about->id)]
            )
        ?></li>
        <li>< ?= $this->Html->link(__('List About'), ['action' => 'index']) ?></li>
    </ul>
</nav-->
<div class="about form large-9 medium-8 columns content">
    <?= $this->Form->create($about) ?>
    <?= $this->Form->create($about, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Editando la sección Acerca de Nosotros.') ?></legend>
        <?php
            echo '<div id="image">
                <img src="'.DS.'files'.DS.'About'.DS.'photo'.DS.$about ['photo'].'" width="200" height="200" />
                <button type="button" onclick="addImage()">Editar imagen</button>
                </div>';
            //echo $this->Form->control('photo');
            echo $this->Form->control('text');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
