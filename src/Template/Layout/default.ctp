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

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <!-- Botón para volver arriba -->
    <!-- Basado en https://www.w3schools.com/howto/howto_js_scroll_to_top.asp -->
    <style>
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
        
        aside {
          background-color:  #cdcdcd;
          padding-top: 25px;
          border-radius: 20px;
        }
        aside button{
          width:100%;
          background-color: #026c59;
          font-weight: bold;
        }
        .side-nav li a:not(.button) {
          color: #0071bc; 
        }
        article {
          background-color: white;
          border-radius: 10px;
          padding: 15px;
        }
        article img {
          margin-bottom: 25px;
          border-radius: 8px;
        }
        article h3 a{
          color: #0071bc;
          font-size: 2.1rem;
        }
        article .row p{
          font-size: 1.4rem;
        }
        <?php if (!isset($isAdmin) || !$isAdmin) { ?>
        body {
          background-color: #ffffff;
        }
        <?php } ?>
        hr {
          border-width: 3px;
        }
        .content {
          padding: 15px;
        }
        .content div {
          border-radius: 10px;
          background-color: white;
          padding: 15px;
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
        .content img {
          width: 100%;
        }
        
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
            <?php } ?>
        </div>
</body>
</html>
