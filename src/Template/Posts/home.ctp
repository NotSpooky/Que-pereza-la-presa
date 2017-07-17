<div class="large-9 columns" role="content">
    <?php foreach ($posts as $post) { ?>
        <article>
            <h3><a href="/posts/view/<?= $post ['id'] ?>"><?= $post ['title'] ?></a></h3>
            <h6>Creado por <?= $post ['author'] ?></h6>
            <div class="row">
                <div class="large-6 columns">
                    <p><?= $post ['summary'] ?></p>
                </div>
            <?php if (isset ($post ['photo']) && $post ['photo'] != '') { ?>
                <div class="large-6 columns">
                    <img width="400" height="240" src='<?= DS.'files'.DS.'Posts'.DS.'photo'.DS.$post ['photo'] ?>'></img>
                </div>
            <?php } ?>
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
