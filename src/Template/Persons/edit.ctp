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
                ['action' => 'delete', $person->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $person->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Persons'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="persons form large-9 medium-8 columns content">
    <?= $this->Form->create($person, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Edit Person') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->input('photo', ['type' => 'file']);
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
