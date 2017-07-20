<?php
/**
  * @var \App\View\AppView $this
  */
?>
<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="large-9 columns" role="content">
    <div class="main">
        <h2>Contacto</h2>
        <h4>¿Tienes alguna pregunta?<br />¡Cont&aacute;ctanos!</h4>
    <?= $this->Form->create($contact, ['type' => 'file']) ?>
    
    <fieldset>
        <?php
            echo $this->Form->control('name', ['label' => 'Nombre:']);
            echo $this->Form->control('number', ['label' => 'Teléfono:']);
            echo $this->Form->control('email', ['label' => 'Correo electrónico:']);
            echo $this->Form->control('subject', ['label' => 'Asunto:']);
            echo $this->Form->control('message', ['label' => 'Mensaje:']);
            echo $this->Form->button('Enviar mensaje');
        ?>
    </fieldset>
    <?= $this->Form->end() ?>
    </div>
</div>
