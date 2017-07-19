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
        #actions-sidebar {
          padding-bottom: 0px;
        }
        #topbar {
          border-radius: 15px;
          background-color: #02011b;
          margin-bottom: 20px;
          margin-top: 20px;
          padding-top: 5px;
          padding-bottom: 5px;
          text-align: center;
        }
        #topbar img {
          margin: "auto";
          border-radius: 8px;
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
        .color-fb {
          color: #3b5998;
        }
        .color-twitter {
          color: #00aced;
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
        .glyph {
          border-bottom: 1px dotted #ccc;
          padding: 0px;
          text-align: center;
          font-size: 400%;
        }
        .large-9 {
          padding-bottom: 0px;
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
        .preview-glyphs {
          vertical-align: bottom;
        } 
        .preview-scale { 
          color: #888;
          font-size: 12px; 
          margin-top: 5px;
        }
        .row .row {
          padding-right: 20px;
        }
        .side-nav hr {
          border-width: 1px;
          margin: 0px;
          border-color: #b4baff;
        }
        .side-nav a {
          font-size: 120%;
        }
        .side-nav li {
          padding-left: 15%;
        }
        .side-nav li a:not(.button) {
          color: #0071bc; 
        }
        .step {
          display: inline-block;
          line-height: 1;
          margin-left: 5%;
          margin-right: 5%;
        }
        
        .about {
          min-width: 3em;
          padding: .1em;
          word-break: break-all;
          hyphens: auto;
          text-align: left;
          vertical-align: top;
          line-height: 120%;
          min-width: 25px;
    max-width: 1500px;
    text-overflow: ellipsis;
    overflow: hidden;
        }

    </style>
    <?php if ($this->request->session()->read('Auth.User')) { 
        // Se cambia el color de la topBar cuando se está logueado.
        echo '<style>#topbar {background-color:#3cbacf;}</style>';
    } ?>
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
                    <h1><a href=""><?= __($this->fetch('title')) ?></a></h1>
                </li>
            </ul>
            <div class="top-bar-section">
                <ul class="right" style="margin-right: 10%;">
                    <h3 style="color: white;">Qu&eacute; pereza la presa</h3>
                </ul>
            </div>
        </nav>
    <?php } else { // Barra de navegación normal ?>
        <a href="/">
            <div class="row" id="topbar">
                <img src="/logo.png" width="55%" height="auto"  alt="Logo" />
            </div>
        </a>
    <?php } ?>
        <div class="row">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
            <?php if ((!isset($isAdmin)) || !$isAdmin) { ?>
                <aside class="large-3 columns">
                  <a href="https://paypal.me/queperezalapresa">
                    <button>Donar mediante Paypal</button>
                    </a>
                    <div class="glyph">
                      <div class="preview-glyphs">
                        <div>
                            <a href="https://www.facebook.com/queperezalapresa/">
                                <i class="step fi-social-facebook color-fb" ></i>
                            </a>
                            <a href="https://twitter.com/qperezalapresa">
                                <i class="step fi-social-twitter color-twitter" ></i>
                            </a>
                        </div>
                      </div>
                    </div>
                    <ul class="side-nav">
                        <hr />
                        <?php if ($this->request->session()->read('Auth.User')) {
                            // Está logueado
                            ?>
                            <li><a href="/users/logout">Cerrar sesi&oacute;n</a></li>
                            <hr />
                        <?php } ?>
                        <li><a class="navbarlink" href="/">Página principal</a></li>
                        <hr />
                        <li><a href="/gallery/list">Galería</a></li>
                        <hr />
                        <li><a href="/questions/list">Preguntas frecuentes</a></li>
                        <hr />
                        <li><a href="#">Contacto</a></li>
                        <hr />
                        <li><a href="/posts/home.rss">Suscribirse (RSS)</a></li>
                    </ul>
                </aside>
            <?php }?>
        </div>
        <div class="row">
            <hr />
            <footer>
                <span style="float:left;">2017-<?= date("Y") ?></span><span style="float:right;"><a href="/users/login">Adminstraci&oacute;n</a></span>
            </footer>
        </div>
</body>
</html>

