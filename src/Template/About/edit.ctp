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
                ['action' => 'delete', $about->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $about->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('About'), ['action' => 'view']) ?></li>
        <li><?= $this->Html->link(__('List Persons'), ['controller' => 'Persons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'Persons', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="about form large-9 medium-8 columns content">
    <?= $this->Form->create($about, ['type' => 'file']); ?>
    <fieldset>
        <legend><?= __('Edit About') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->input('photo', ['type' => 'file']);
            echo $this->Form->control('text');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Agregar')) ?>
    <?= $this->Form->end() ?>
</div>
