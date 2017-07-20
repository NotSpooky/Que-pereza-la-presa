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
        <?= $adminNavbarCommonElements ?>
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Volver a Acerca de nosotros'), ['action' => 'view', $about->id]) ?> </li>
        <li><?= $this->Html->link(__('Lista de  Personas'), ['controller' => 'Persons', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nueva persona Person'), ['controller' => 'Persons', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="about form large-9 medium-8 columns content">
    <?= $this->Form->create($about, ['type' => 'file']); ?>
    <fieldset>
        <legend><?= __('Edit About') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo '<div id="image">
                <img src="'.DS.'files'.DS.'About'.DS.'photo'.DS.$about ['photo'].'" width="200" height="200" />
                <button type="button" onclick="addImage()">Editar imagen</button>
                </div>';
            echo $this->Form->control('text');
        ?>
    </fieldset>
    <?= $this->Form->button('Editar') ?>
    <?= $this->Form->end() ?>
</div>
