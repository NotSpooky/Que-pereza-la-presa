<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\About $about
  */
?>

<div>
 <!--div class="posts index large-9 medium-8 columns content"-->
    <div class="main">
        <h2>Acerca de nosotros.</h2>
        <?php if (isset ($about->photo) && $about->photo != '') {
            echo '<img src="'.DS.'files'.DS.'About'.DS.'photo'.DS.$about -> photo.'" />';
        } ?>
        <p><?= str_replace("\n", "<br />", $about->text) ?></p>
        <br />
        <div class="related">
        </div>
             <div class="container"> 
  <div class="person_gallery">
    <div class="person"> <img src="images/bkg_06.jpg" alt="" width="2000" class="person_photo"/>
      <h4>TITLE</h4>
      <p class="person_title">HTML, CSS, JS, WordPress</p>
      <p class="person_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div class="person"> <img src="images/bkg_06.jpg" alt="" width="2000" class="person_photo"/>
      <h4>TITLE</h4>
      <p class="person_title">HTML, CSS, JS, WordPress</p>
      <p class="person_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div class="person"> <img src="images/bkg_06.jpg" alt="" width="2000" class="person_photo"/>
      <h4>TITLE</h4>
      <p class="person_title">HTML, CSS, JS, WordPress</p>
      <p class="person_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div class="person"> <img src="images/bkg_06.jpg" alt="" width="2000" class="person_photo"/>
      <h4>TITLE</h4>
      <p class="person_title">HTML, CSS, JS, WordPress</p>
      <p class="person_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
  </div>
        </div>
     <br>

</div>


</div>


