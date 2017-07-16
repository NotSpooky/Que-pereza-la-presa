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
        <div class="row">
            <div class="large-12 columns">
                <div class="nav-bar right">

                </div>
                <h1><a href="/"><img src="/logo.png" width="80" height="80" style="margin-right: 20px;" alt="Logo" />Qué pereza la presa</a></h1>
                <hr />
            </div>
        </div>
    <?php } ?>
        <div class="row">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
            <?php if ((!isset($isAdmin)) || !$isAdmin) { ?>
                <aside class="large-3 columns">
                    <button>Donaciones</button>
                    <ul class="side-nav">
                        <li><a href="/">Página principal</a></li>
                        <li><a href="/gallery/list">Galería</a></li>
                        <li><a href="/questions/list">Preguntas frecuentes</a></li>
                        <li><a href="#">Contacto</a></li>
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
