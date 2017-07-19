<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\About $about
  */
?>


    <div class="about view large-9 medium-8 columns">
    <h2>Acerca de nosotros.</h2>
    <div class="about view large-9 medium-8 columns">
    <?php if (isset ($about->photo) && $about->photo != '') {
            echo '<img src="'.DS.'files'.DS.'About'.DS.'photo'.DS.$about -> photo.'" />';
    } ?>
    <br>
    <p><?= str_replace("\n", "<br />", $about->text) ?></p>
    </div>
    <br>
</div>
