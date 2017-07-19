<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\About $about
  */
?>


 <div class="posts index large-9 medium-8 columns content">
    <div class="main">
        <h2>Acerca de nosotros.</h2>
        <?php if (isset ($about->photo) && $about->photo != '') {
            echo '<img src="'.DS.'files'.DS.'About'.DS.'photo'.DS.$about -> photo.'" />';
        } ?>
        <p><?= str_replace("\n", "<br />", $about->text) ?></p>
        <br />
        <div class="related">
        </div>
        </div>
     <br>
</div>



