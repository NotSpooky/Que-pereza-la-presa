<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Question[]|\Cake\Collection\CollectionInterface $questions
  */
?>

<div class="question index large-9 medium-8 columns content">
    <br />
    <br />
    <br />
    <h3>Preguntas y respuestas.</h3>
    <?php if (isset($isAdmin) && $isAdmin) { // Si es admin puede editar o eliminar preguntas ?>
        <td class="actions">
            <?= $this->Html->link(__('New Comment'), ['controller' => 'Comments', 'action' => 'add']) ?>
        </td>
    <?php }  ?>
    
    <div class="panel-group" id="accordion">
        <div class="faqHeader"></div>
        <?php foreach ($questions as $question): ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <span><a class="accordion-toggle" data-parent="#accordion" href="#<?= h($question->id) ?>"><?= h($question->question) ?></a></span>
                </h4>
            </div>
            <?php if (isset($isAdmin) && $isAdmin) { // Si es admin puede editar o eliminar preguntas ?>
            <td class="actions">
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $question->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $question->id], ['confirm' => __('Estas seguro de que quieres eliminar esta pregunta?')]) ?>
            </td>
            <?php }  ?>
            <div id="<?= h($question->id) ?>" class="panel-collapse collapse in">
                <div class="panel-body">
                    <?= h($question->answer) ?> 
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
</html>

<!--http://www.prepbootstrap.com/bootstrap-template/faq-example-->


<!--?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Question[]|\Cake\Collection\CollectionInterface $questions
  */
?>

<div class="question index large-9 medium-8 columns content">
    <br />
    <br />
    <br />
    <h3>Preguntas y respuestas.</h3>
    < ?php if (isset($isAdmin) && $isAdmin) { // Si es admin puede editar o eliminar preguntas ?>
        <td class="actions">
            < ?= $this->Html->link(__('New Comment'), ['controller' => 'Comments', 'action' => 'add']) ?>
        </td>
    < ?php }  ?>
    
    <div class="panel-group" id="accordion">
        <div class="faqHeader"></div>
        < ?php foreach ($questions as $question): ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <span><a class="accordion-toggle" data-parent="#accordion" href="#<?= h($question->id) ?>"><?= h($question->question) ?></a></span>
                </h4>
            </div>
            < ?php if (isset($isAdmin) && $isAdmin) { // Si es admin puede editar o eliminar preguntas ?>
            <td class="actions">
                    < ?= $this->Html->link(__('Edit'), ['action' => 'edit', $question->id]) ?>
                    < ?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $question->id], ['confirm' => __('Estas seguro de que quieres eliminar esta pregunta?')]) ?>
            </td>
            < ?php }  ?>
            <div id="< ?= h($question->id) ?>" class="panel-collapse collapse in">
                <div class="panel-body">
                    < ?= h($question->answer) ?> 
                </div>
            </div>
        </div>
        < ?php endforeach; ?>
    </div>
</div>
</html>

<!--http://www.prepbootstrap.com/bootstrap-template/faq-example-->