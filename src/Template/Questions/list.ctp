<div class="large-9 columns" role="content">
    <div class="main">
        <h2>Preguntas frecuentes</h2>
        <?php foreach ($questions as $question) { ?>
            <hr />
            <h3><?= $question->question ?></h3>
            <p><?= $question->answer ?></p>
        <?php } ?>
    </div>
</div>
