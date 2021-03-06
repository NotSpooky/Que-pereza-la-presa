<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Contact[]|\Cake\Collection\CollectionInterface $contacts
  */
?>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <?= $adminNavbarCommonElements ?>
    </ul>
</nav>
<div class="contacts index large-9 medium-8 columns content">
    <h3>Mensajes de contacto</h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subject') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contacts as $contact): ?>
            <tr>
                <td><?= $this->Number->format($contact->id) ?></td>
                <td><?= h($contact->name) ?></td>
                <td><?= h($contact->email) ?></td>
                <td><?= h($contact->number) ?></td>
                <td><?= h($contact->subject) ?></td>
                <?php if (h($contact->photo)!=null){ ?>
                <td class="large-6 columns">
                    
                    <img width="100" src='<?= '/files/Contacts/photo/'.$contact ['photo'] ?>'></img>
                </td>
                <?php }else {  ?>
                <td></td>
                <?php }  ?>
                <td><?= h($contact->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $contact->id]) ?>
                    <br>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contact->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contact->id)]) ?>
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
</div>
