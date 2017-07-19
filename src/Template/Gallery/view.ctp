<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Gallery $gallery
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <?= $adminNavbarCommonElements ?>
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Gallery'), ['action' => 'edit', $gallery->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Gallery'), ['action' => 'delete', $gallery->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gallery->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Gallery'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Gallery'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="gallery view large-9 medium-8 columns content">
    <h3><?= h($gallery->description) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <td><?= h($gallery->photo) ?></td>
            <img src="/files/Gallery/photo/<?= h($gallery->photo) ?>" alt="foto" />
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($gallery->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($gallery->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($gallery->created) ?></td>
        </tr>
    </table>
</div>
