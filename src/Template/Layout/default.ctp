<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';

?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
		<?php if (isset($title)) {
			echo $title;
		} else {
			echo $this->fetch('title'); 
		} ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->Html->css('//cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.min.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <!-- Botón para volver arriba -->
    <!-- Basado en https://www.w3schools.com/howto/howto_js_scroll_to_top.asp -->
    <style>
        #topbar {
          border-radius: 15px;
          background-color: #cdcdcd;
          margin-bottom: 20px;
          margin-top: 20px;
          padding-top: 5px;
          padding-bottom: 5px;
          text-align: center;
        }
        #topbar a {
          color: #0071bc; 
          font-style: italic;
        }
        #topbar a img {
            float:left;
        }
        #upButton {
          display: none;
          position: fixed;
          bottom: 20px;
          right: 30px;
          z-index: 99;
          border: none;
          outline: none;
          background-color: #33F;
          color: white;
          cursor: pointer;
          padding: 15px;
          border-radius: 10px;
        }

        #upButton:hover {
          background-color: #55F;
        }
        aside {
          background-color:  #cdcdcd;
          padding-top: 25px;
          border-radius: 20px;
          border: solid aliceblue;
        }
        aside button{
          width:100%;
          font-weight: bold;
        }
        article a {
          color: #0071bc;
        }
        article h3 {
          margin-bottom: 8px;
        }
        article h3 a{
          font-size: 2.1rem;
        }
        article .row p{
          font-size: 1.4rem;
        }
        <?php if (!isset($isAdmin) || !$isAdmin) { ?>
        body {
          background-color: #f5f4ff;
        }
        <?php } ?>

        button {
          background-color: #026c59;
          border-radius: 10px;
        }
        hr {
          border-width: 3px;
        }
        .content form div {
          padding: 0px;
        }
        .content h3 {
          color: #0071bc;
        }
        .content h4 {
          color: #0071bc;
          border-bottom: 2px solid #7f76bf;
        }
        .main {
          background-color: #8cb1c5;
          border-radius: 10px;
          border: 2px solid #5a8ab4;
          padding: 15px;
        }
        .main input {
          background-color: #d9e2e4;
          border-color: #5a8ab4;
        }
        .main fieldset legend {
          background-color: inherit;
          color: #353B3C;
        }
        .main img {
          margin-bottom: 25px;
          margin-right: 20px;
          border-radius: 8px;
          border: 3px solid #5a8ab4;
          float: left;
        }
        .side-nav li a:not(.button) {
          color: #0071bc; 
        }
        .row .row {
          padding-right: 20px;
        }
        #actions-sidebar {
          padding-bottom: 0px;
        }
        .glyph {
        border-bottom: 1px dotted #ccc;
        padding: 10px 0 20px;
        margin-bottom: 20px;
        text-align: center;
      }

      .preview-glyphs { vertical-align: bottom; } 

      .preview-scale { 
        color: #888;
        font-size: 12px; 
        margin-top: 5px;
      }

      .step {
        display: inline-block;
        line-height: 1;
        width: 10%;
      }
      .size-48 { font-size: 48px; }
      .color-fb { color: #3b5998; }
      .color-twitter { color: #00aced; }
        

    </style>
</head>
<body>
    <button onclick="topFunction()" id="upButton" title="Go to top">Volver al inicio</button>

	<script>
		// When the user scrolls down 20px from the top of the document, show the button
		window.onscroll = function() {scrollFunction()};

		function scrollFunction() {
			if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
				document.getElementById("upButton").style.display = "block";
			} else {
				document.getElementById("upButton").style.display = "none";
			}
		}

		// When the user clicks on the button, scroll to the top of the document
		function topFunction() {
			document.body.scrollTop = 0;
			document.documentElement.scrollTop = 0;
		}
	</script>
    <?php if (isset($isAdmin) && $isAdmin) { // Se coloca navegación arriba ?>
        <nav class="top-bar expanded" data-topbar role="navigation">
            <ul class="title-area large-3 medium-4 columns">
                <li class="name">
                    <h1><a href=""><?= $this->fetch('title') ?></a></h1>
                </li>
            </ul>
            <div class="top-bar-section">
                <ul class="right">
                    <li><a target="_blank" href="http://book.cakephp.org/3.0/">Documentation</a></li>
                    <li><a target="_blank" href="http://api.cakephp.org/3.0/">API</a></li>
                </ul>
            </div>
        </nav>
    <?php } else { // Barra de navegación normal ?>
        <div class="row" id="topbar">
            <div class="large-12 columns">
                
                <h1><a href="/"><img src="/logo.png" width="100" height="100" style="margin-right: 20px;" alt="Logo" />Qué Pereza la Presa</a></h1>
                <div class="nav-bar right">

                </div>
            </div>
        </div>
    <?php } ?>
        <div class="row">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
            <?php if ((!isset($isAdmin)) || !$isAdmin) { ?>
                <aside class="large-3 columns">
                    <button>Donar mediante Paypal</button>
                    <div class="glyph">
                      <div class="preview-glyphs">
                        <div>
                          <a href="https://www.facebook.com/queperezalapresa/">
                            <i class="step fi-social-facebook size-48 color-fb" ></i>
                          </a>
                        </div>
                        <div>
                        <a href="https://twitter.com/qperezalapresa">
                        <i class="step fi-social-twitter size-48 color-twitter" ></i>
                         </a>
                        <div>
                      </div>
                    </div>
                    <ul class="side-nav">
                        <li><a class="navbarlink" href="/">Página principal</a></li>
                        <li><a href="/gallery/list">Galería</a></li>
                        <li><a href="/questions/list">Preguntas frecuentes</a></li>
                        <li><a href="#">Contacto</a></li>
                        <li><a href="/posts/home.rss"</a>Suscribirse</li>
                    </ul>
                    <div class="panel">
                        <h5>Lorem ipsum</h5>
                        <p>Pork drumstick turkey fugiat. Tri-tip elit turducken pork chop in. 
            Swine short ribs meatball irure bacon nulla pork belly cupidatat 
            meatloaf cow.</p>
                        <a href="#">Leer más...</a>
                    </div>
                </aside>
            <?php }?>
        </div>
</body>
</html>
