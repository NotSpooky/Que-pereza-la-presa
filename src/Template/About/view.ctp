<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\About $about
  */
?>
<div class="large-9 columns" role="content">
    <div class="main">
        <h2>Acerca de nosotros</h2>
        <div class="row" style="text-align:center;">
            <?php if (isset ($about->photo) && $about->photo != '') {
                echo '<img src="'.DS.'files'.DS.'About'.DS.'photo'.DS.$about -> photo.'" class="about_image" style="display: inline-block; float:none;" />';
            } ?>
        </div>
        <hr />
        <p><?= str_replace("\n", "<br />", $about->text) ?></p>
        <br />
        <h4><?= __('Persons') ?></h4>
        <br />
        <div class="related">
            <?php if (!empty($about->persons)){ ?>
                <?php $contador=0; ?>
                <div class="container"> 
                <!--table cellpadding="0" cellspacing="0"-->
                    <?php foreach ($about->persons as $person){ ?>
                        <div class="person_gallery">
                            <div class="person"> 
                                <?php if (isset ($person->photo) && $person->photo != '') {
                                    echo '<img src="'.DS.'files'.DS.'Persons'.DS.'photo'.DS.$person -> photo.'"  alt="" width="2000" class="person_photo" />';
                                } ?>
                                <h4><?= h($person->name) ?></h4>
                                <p class="person_title"><?= h($person->title) ?></p>
                                <p class="person_description"><?= h($person->description) ?></p>
                            </div>
                        </div>
                    <?php } ?>
                <!--/table-->
            <?php } ?>
        </div>
    </div>
</div>

