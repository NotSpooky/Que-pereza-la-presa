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
        
        <br />
        <hr />
        <h4><?= __('Persons') ?></h4>
        <br />
        
        <div class="related">
            <?php if (!empty($about->persons)){ ?>
            <?php $contador=0; ?>
            <div class="container"> 
            <!--table cellpadding="0" cellspacing="0"-->
                <?php foreach ($about->persons as $person){ ?>
                  <?php if (($contador%4)==0){ ?>
                <!--h5><span style="color:blue">< ?= h($person->name) ?></span></h5>
                    <p style="margin-left: 3%;">< ?= h($person->description) ?></p-->
                    <div class="person_gallery">
                    <?php } ?>
                     <div class="person"> 
                         <?php if (isset ($person->photo) && $person->photo != '') {
                         //<img src="images/bkg_06.jpg" alt="" width="2000" class="person_photo"/>
                         echo '<img src="'.DS.'files'.DS.'Persons'.DS.'photo'.DS.$person -> photo.'"  alt="" width="2000" class="person_photo" />';
                         } ?>
                          <h4><?= h($person->name) ?></h4>
                          <p class="person_title"><?= h($person->title) ?></p>
                          <p class="person_description"><?= h($person->description) ?></p>
                      </div>
                    <?php if (($contador%4)==3){ ?>
                       </div>
                    <div class="person_gallery">
                    <?php } ?>
                <?php } ?>
            <!--/table-->
            <?php } ?>
        </div>
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


