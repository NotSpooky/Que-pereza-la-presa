<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Person[]|\Cake\Collection\CollectionInterface $persons
  */
?>

<div class="persons index large-9 medium-8 columns content">
    <h3><?= __('Persons') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($persons as $person): ?>
            <tr>
                <td><?= $this->Number->format($person->id) ?></td>
                <td><?= h($person->name) ?></td>
                <td><?= h($person->description) ?></td>
                <!--td>< ?= h($person->photo) ?></td-->
                <td class="large-6 columns">
                    <img width="480" height="240" src='<?= '/files/Persons/photo/'.$person ['photo'] ?>'></img>
                </td>
                <td><?= h($person->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $person->id]) ?>
                    <br>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $person->id]) ?>
                    <br>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $person->id], ['confirm' => __('Are you sure you want to delete # {0}?', $person->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
    <li><?= $this->Html->link(__('New Person'), ['action' => 'add']) ?></li>
</div>
