<!-- File: src/Template/Users/login.ctp -->

<div class="large-9 columns" role="content">
<?= $this->Flash->render() ?>
<?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Please enter your username and password') ?></legend>
        <?= $this->Form->control('username') ?>
        <?= $this->Form->control('password') ?>
        <?= $this->Form->button(__('Login')); ?>
    </fieldset>
<?= $this->Form->end() ?>
</div>
