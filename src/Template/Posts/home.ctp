<div class="large-9 columns" role="content">
    <?php foreach ($posts as $post) { ?>
        <hr />
        <article>
            <h3><a href="#"><?= $post ['title'] ?></a></h3>
            <h6>Creado por <a href="#"><?= $post ['author'] ?></a></h6>
            <div class="row">
                <div class="large-6 columns">
                    <p><?= $post ['summary'] ?></p>
                </div>
            <?php if (isset ($post ['photo']) && $post ['photo'] != '') { ?>
                <div class="large-6 columns">
                    <img width="400" height="240" src='<?= $post ['photo'] ?>'></img>
                </div>
            <?php } ?>
            </div>
        </article>
    <?php } ?>
</div>
