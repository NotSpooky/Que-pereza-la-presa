<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Contact $contact
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(__('Eliminar mensaje'), ['action' => 'delete', $contact->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contact->id)]) ?> </li>
        <li><?= $this->Html->link(__('Lista de mensajes'), ['action' => 'index']) ?> </li>
    </ul>
</nav>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <?= $adminNavbarCommonElements ?>
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(__('Eliminar mensaje'), ['action' => 'delete', $contact->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contact->id)]) ?> </li>
        <li><?= $this->Html->link(__('Lista de mensajes'), ['action' => 'index']) ?> </li>
    </ul>
</nav>
<div class="contacts view large-9 medium-8 columns content">
    <div class="main">
        <h1>Mensajes recibidos.</h1>
        <h3><?= h($contact->subject) ?></h3>
        <h6>Enviado: <?= $contact->created->format('d/m/Y') ?></h6>
        <?php if (isset ($contact->photo) && $contact->photo != '') {
            echo '<img src="'.DS.'files'.DS.'Contacts'.DS.'photo'.DS.$contact -> photo.'" />';
        } ?>
        <p><?= str_replace("\n", "<br />", $contact->message) ?></p>
        <h6>Enviado por: <?= $contact->name ?></h6>
        <h6>Email: <?= $contact->email ?></h6>
        <?php if (isset ($contact->photo) && $contact->photo != '') { ?>
            <h6>Teléfono: <?= $contact->number ?></h6>
        <?php } ?>
        <br />
    </div>
</div>
