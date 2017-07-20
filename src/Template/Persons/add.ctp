<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="persons form large-9 medium-8 columns content">
    <?= $this->Form->create($person, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Add Person') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('title');
            echo $this->Form->input('photo', ['type' => 'file']);
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?><li><?= $this->Html->link(__('Volver'), ['action' => 'index']) ?></li>
    <?= $this->Form->end() ?>
</div>
