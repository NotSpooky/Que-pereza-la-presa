<div class="large-9 columns" role="content">
    <?php foreach ($posts as $post) { 
        $path = "'/posts/view/".$post->id."'"
    ?>
        <article class="main">
            <a href=<?= $path ?>>
                <div class="post-title">
                    <h3><?= $post -> title ?></h3>
                </div>
            </a>
            <h6>Creado por <?= $post ['author'] ?></h6>
            <div class="row">
                <?php if (isset ($post ['photo']) && $post ['photo'] != '') { ?>
                <div class="large-6 columns">
                    <a href=<?= $path ?>>
                        <img width="480" height="240" src='<?= '/files/Posts/photo/'.$post ['photo'] ?>'></img>
                    </a>
                </div>
                <?php } ?>
                <div class="large-6 columns">
                    <p><?= $post ['summary'] ?></p>
                    <a href=<?= $path ?>>Ver m&aacute;s...</a>
                </div>
            
            </div>
        </article>
        <hr />
    <?php } ?>
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
